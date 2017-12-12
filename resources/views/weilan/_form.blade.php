<form class="contact-form mt-45" id="contact">
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
                        <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="姓名">
                    </div>
                    <div class="form-field">
                        <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="邮箱" >
                    </div>
                    <div class="form-field">
                        <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="主题">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-field">
                        <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="描述" ></textarea>
                    </div>
                </div>
                <div class="col-sm-12 mt-30">
                    <button class="btn-text" type="button" id="submit" name="button">
                        提交
                    </button>
                </div>
            </div>
        </form>