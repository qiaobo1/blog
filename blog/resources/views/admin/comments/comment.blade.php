                        @extends('admin.public.parent')
                        @section('content')
        <!-- 内容区域 -->

            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            @if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}")
                                </script>
                            @endif
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">评论管理</div>
                            </div>
                            <div class="widget-body  am-fr">   
                                <form name="myform" action="" method="post" style="display:none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                </form>  
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="tpl-table-black-operation">
                                                <a href="{{url('/comment/create')}}">
                                                    <i class="am-icon-pencil"></i> 新增评论
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
                                          <option value="option1">所有类别</option>
                                          <option value="option2">动作</option>
                                          <option value="option3">惊悚</option>
                                          <option value="option3">爱情</option>
                                          <option value="option3">科幻</option>
                                          <option value="option3">古装</option>
                                          <option value="option3">都市</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">


                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>编号</th>
                                                <th>视频类</th>
                                                <th>视频</th>
                                                <th>评论人</th>
                                                <th>评论时间</th>
                                                <th>评论内容</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comment as $comment)
                                            <tr class="gradeX">
                                                <td>{{ $comment->id }}</td>
                                                <td>{{ $comment->category_id }}</td>
                                                <td>{{ $comment->video_id }}</td>
                                                <td>{{ $comment->username }}</td>
                                                <td>{{ $comment->create_time }}</td>
                                                <td>{{ $comment->content }}</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('comment/'.$comment->id.'/edit') }}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:doDel({{ $comment->id }})"class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        
                                            <!-- more data -->
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <script>
            function doDel(id)
            {
                if(confirm('你确定要删除吗？')){
                    var form = document.myform;
                    form.action = 'comment/'+id;
                    form.submit();
                }
                
            }
        </script>

    @endsection