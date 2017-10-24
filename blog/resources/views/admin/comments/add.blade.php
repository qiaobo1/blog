                        @extends('admin.public.parent')
                        @section('content')
        <!-- 内容区域 -->

            <div class="row-content am-cf">
                <div class="row">
                    
                          
                    <div class="row">
                        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                            <div class="widget am-cf">
                                <div class="widget-head am-cf">
                                    <div class="widget-title am-fl">新增评论</div>
                                    <div class="widget-function am-fr">
                                        <a href="javascript:;" class="am-icon-cog"></a>
                                    </div>
                                </div>
                                <div class="widget-body am-fr">

                                    <form action="{{ url('comment') }}" method="post" class="am-form tpl-form-line-form">
                                        {{ csrf_field() }}
                                        <div class="am-form-group">
                                            <label for="user-phone" class="am-u-sm-3 am-form-label">视频类 <span class="tpl-form-line-small-title">所有类</span></label>
                                            <div class="am-u-sm-9">
                                                <select data-am-selected="{searchBox: 1}" style="display: none;" name='category_id'>
                                                    <option value="1">动作</option>
                                                    <option value="2">惊悚</option>
                                                    <option value="3">爱情</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">视频名
                                            <span class="tpl-form-line-small-title">video</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" id="user-name" placeholder="请填写视频名称" name='video_id'>
                                                <small>请填写视频名称</small>
                                            </div>
                                        </div>

                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">评论人
                                            <span class="tpl-form-line-small-title">username</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" id="user-name" placeholder="请填写用户名" name='username'>
                                                <small>请填写用户名</small>
                                            </div>
                                        </div>

                                        <div class="am-form-group">
                                            <label for="user-email" class="am-u-sm-3 am-form-label">评论时间 <span class="tpl-form-line-small-title">Time</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="am-form-field tpl-form-no-bg" placeholder="评论时间为必填" data-am-datepicker="" readonly="" name='create_time'>
                                                <small>评论时间为必填</small>
                                            </div>
                                        </div>
                                        <div class="am-form-group">
                                            <label for="user-intro" class="am-u-sm-3 am-form-label">评论内容</label>
                                            <div class="am-u-sm-9">
                                                <textarea class="" rows="10" id="user-intro" placeholder="请输入评论内容" name='content'></textarea>
                                            </div>
                                        </div>

                                        <div class="am-form-group">
                                            <div class="am-u-sm-9 am-u-sm-push-3">
                                                <input type="submit"  class="am-btn am-btn-primary tpl-btn-bg-color-success " value="确认添加"></input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>

    @endsection