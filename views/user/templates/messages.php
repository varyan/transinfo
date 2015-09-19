<div class="panel panel-default inbox-panel">
    <div class="panel-body">
        <label class="label-checkbox inline">
            <input type="checkbox" id="chk-all">
            <span class="custom-checkbox"></span>
        </label>
        <a class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Write Mail</a>
        <a class="btn btn-sm btn-default"><i class="fa fa-trash-o"></i> Delete</a>

        <div class="pull-right">
            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
            <div class="btn-group" id="inboxFilter">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    All
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">Starred</a></li>
                    <li><a href="#">Unstarred</a></li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="list-group">
        <li class="list-group-item clearfix inbox-item">
            <label class="label-checkbox inline">
                <input type="checkbox" class="chk-item">
                <span class="custom-checkbox"></span>
            </label>
            <span class="starred"><i class="fa fa-star fa-lg"></i></span>
            <span class="from">Jane Doe</span>
											<span class="detail">
												<span class="label label-info">Work</span>		
												Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.
											</span>		
											<span class="inline-block pull-right">
												<span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
												<span class="time">1:17 Am</span>		
											</span>
        </li>
        <li class="list-group-item clearfix inbox-item">
            <label class="label-checkbox inline">
                <input type="checkbox" class="chk-item">
                <span class="custom-checkbox"></span>
            </label>
            <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
            <span class="from">My business</span>
            <span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>
											<span class="inline-block pull-right">
												<span class="time">Yesterday</span>		
											</span>
        </li>
    </ul><!-- /list-group -->
    <div class="panel-footer clearfix">
        <div class="pull-left">112 messages</div>
        <div class="pull-right">
            <span class="middle">Page 1 of 8 </span>
            <ul class="pagination middle">
                <li class="disabled"><a href="#"><i class="fa fa-step-backward"></i></a></li>
                <li class="disabled"><a href="#"><i class="fa fa-caret-left large"></i></a></li>
                <li><a href="#"><i class="fa fa-caret-right large"></i></a></li>
                <li><a href="#"><i class="fa fa-step-forward"></i></a></li>
            </ul>
        </div>
    </div>
</div><!-- /panel -->