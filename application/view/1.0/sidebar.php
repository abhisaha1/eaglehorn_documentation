<h4>Getting Started</h4>
<div id="sidebar">
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'install')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/install">Installation</a></li>
            <li><a class='<?php echo (getParameters(0) == 'start')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/start">Quick start</a></li>
        </ul>
    </div>
</div>

<h4>Main</h4>
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'controller')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/controller">Controller</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'model')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/model">Model</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'view')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/view">View</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'template')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/template">Template</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'routing')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/routing">Routing</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'logging')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/logging">Error Logging</a>
            </li>
        </ul>
    </div>
</div>

<h4>Assembly</h4>
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'mail')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/assembly/mail">Mail</a></li>
            
        </ul>
    </div>
</div>

<h4>Workers</h4>
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'session') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/session">Session</a></li>
            <li><a class='<?php echo (getParameters(0) == 'cookie') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/cookie">Cookie</a></li>
            <li><a class='<?php echo (getParameters(0) == 'cache') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/cache">Cache</a></li>
            <li><a class='<?php echo (getParameters(0) == 'time') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/time">Time</a></li>
            <li><a class='<?php echo (getParameters(0) == 'upload') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/upload">Upload</a></li>
            <li><a class='<?php echo (getParameters(0) == 'zip') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/zip">Zip</a></li>
            <li><a class='<?php echo (getParameters(0) == 'rss') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/rss">RSS</a></li>
            <li><a class='<?php echo (getParameters(0) == 'text') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/text">Text</a></li>
            <li><a class='<?php echo (getParameters(0) == 'pagination') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/pagination">Pagination</a></li>

        </ul>
    </div>
</div>
</div>