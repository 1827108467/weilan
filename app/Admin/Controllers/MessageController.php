<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Message;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MessageController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('客户消息');
            $content->description('列表页');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('客户消息');
            $content->description('修改页');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('客户消息');
            $content->description('新增页');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Message::class, function (Grid $grid) {

             // 禁用创建按钮
             $grid->disableCreation();
             // 禁用操作按钮
            //  $grid->disableActions();

            $grid->id('编号')->sortable();

            $grid->customer_name('客户姓名');
            $grid->mobile('客户手机');
            $grid->customer_email('客户邮箱');
            $grid->subject('主题');
            $grid->call_back('是否回访')->editable( 'select' , [1 => '是', 0 => '否']);
            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Message::class, function (Form $form) {

            $form->tab('业务数据' , function($form){
                $form->display('id', '编号');
                $form->display('customer_name', '客户姓名');
                $form->mobile('mobile', '手机');
                $form->display('customer_email', '邮箱');
                
                $form->display('subject', '主题');
                $form->display('customer_subscribe', '描述');
                $form->radio('call_back' , '是否回访')->options([1 => '是', 0 => '否'])->default(0);
                $form->textarea('remark' , '回访备注')->rows(6);

            })->tab('系统信息' ,function($form){
                $form->display('created_at', '创建时间');
                $form->display('updated_at', '修改时间');
            });
        });
    }
}
