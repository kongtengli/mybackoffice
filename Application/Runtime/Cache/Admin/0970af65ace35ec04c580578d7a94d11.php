<?php if (!defined('THINK_PATH')) exit();?>                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <?php if(is_array($data)): foreach($data as $key=>$v): ?><li>
                                <a href="<?php echo U($v['url']);?>"><i class="icon-chevron-right"></i> <?php echo ($v["name"]); ?></a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>