<h4>Getting Started</h4>
<div id="sidebar">
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'install')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/install/<?php echo $this->version; ?>">Installation</a></li>
            <li><a class='<?php echo (getParameters(0) == 'start')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/start/<?php echo $this->version; ?>">Quick start</a></li>
        </ul>
    </div>
</div>

<h4>Main</h4>
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'controller')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/controller/<?php echo $this->version; ?>">Controller</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'model')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/model/<?php echo $this->version; ?>">Model</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'view')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/view/<?php echo $this->version; ?>">View</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'template')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/template/<?php echo $this->version; ?>">Template</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'routing')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/routing/<?php echo $this->version; ?>">Routing</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'logging')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/logging/<?php echo $this->version; ?>">Error Logging</a>
            </li>
            <li><a class='<?php echo (getParameters(0) == 'hooks')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/page/hooks/<?php echo $this->version; ?>">Hooks</a></li>
        </ul>
    </div>
</div>

<h4>Workers</h4>
<div class="row">
    <div class="col-lg-12">
        <ul class="list-unstyled">
            <li><a class='<?php echo (getParameters(0) == 'session') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/session/<?php echo $this->version; ?>">Session</a></li>
            <li><a class='<?php echo (getParameters(0) == 'cookie') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/cookie/<?php echo $this->version; ?>">Cookie</a></li>
            <li><a class='<?php echo (getParameters(0) == 'cache') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/cache/<?php echo $this->version; ?>">Cache</a></li>
            <li><a class='<?php echo (getParameters(0) == 'time') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/time/<?php echo $this->version; ?>">Time</a></li>
            <li><a class='<?php echo (getParameters(0) == 'upload') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/upload/<?php echo $this->version; ?>">Upload</a></li>
            <li><a class='<?php echo (getParameters(0) == 'zip') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/zip/<?php echo $this->version; ?>">Zip</a></li>
            <li><a class='<?php echo (getParameters(0) == 'rss') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/rss/<?php echo $this->version; ?>">RSS</a></li>
            <li><a class='<?php echo (getParameters(0) == 'text') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/text/<?php echo $this->version; ?>">Text</a></li>
            <li><a class='<?php echo (getParameters(0) == 'pagination') ? 'active' : ''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/pagination/<?php echo $this->version; ?>">Pagination</a></li>
            <li><a class='<?php echo (getParameters(0) == 'mail')?'active':''; ?>' href="<?php echo configItem('site')['url']; ?>home/worker/mail/<?php echo $this->version; ?>">Mail</a></li>
        </ul>
    </div>
</div>
</div>