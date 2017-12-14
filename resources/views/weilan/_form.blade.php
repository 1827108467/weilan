        {{--  保存成功  --}}
        @include('layout.promopting')

        {{--  显示错误  --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="contact-form mt-45" id="contact" method ='post' action="/message">
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
                <div role="alert" class="alert alert-success">
                    <strong>Thanks</strong> for using our template. Your message has been sent.
                </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-field">
                        <input class="input-sm form-full" id="name" required="required" type="text" name="customer_name" placeholder="姓名 (必填)">
                    </div>
                    
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-field">
                        <input class="input-sm form-full" id="email" type="text" name="customer_email" placeholder="邮箱" >
                    </div>

                    <div class="form-field">
                        <input class="input-sm form-full" id="mobile" required="required" type="text" name="mobile" placeholder="手机 (必填)" >
                    </div>

                    <div class="form-field">
                        <input class="input-sm form-full" id="sub" required="required" type="text" name="subject" placeholder="主题 (必填)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-field">
                        <textarea class="form-full" id="message" rows="7" name="customer_subscribe" placeholder="描述" ></textarea>
                    </div>
                </div>
                <div class="col-sm-12 mt-30">
                    <button class="btn-text" type="submit" id="submit" name="button">
                        提交
                    </button>
                </div>
            </div>
        </form>