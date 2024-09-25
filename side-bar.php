<!-- Start Sidebar -->
<div class="col-md-3 sidebar">
    <div class="widget sidebar-widget">
        <div class="sidebar-widget-title">
            <h3>Upcoming Events</h3>
        </div>
        <ul>
            <?php
            $result = $db->prepare("SELECT * FROM events ORDER BY id ASC Limit 5");
            $result->execute();
            for ($i = 0; $row = $result->fetch(); $i++) {
                ?>
                <li class="item event-item clearfix">
                    <div class="event-detail" style="width: 100%; max-width: 600px; margin: 0 auto;">
                        <h4><a href="event-detail.php?id=<?php echo $row['id']; ?>"
                               style="color: #0369A3; font-size: 18px;"><?php echo $row['title']; ?></a></h4>
                        <span class="event-dayntime meta-data"style="font-size: 13px;">
                        <i class="fa fa-calendar-days" style="font-size: 12px;"></i> <?php echo $row['date']; ?> |
                         <i class="fa fa-clock-o" style="font-size: 12px;"></i><?php echo $row['time']; ?>
                    </span></div>
                </li>
            <?php } ?>
        </ul>
    </div>
<br>

    <!-- Recent Notices Widget -->
    <div class="widget-recent-posts widget">
        <div class="sidebar-widget-title">
            <h3>Recent Notices</h3>
        </div>
        <ul>
            <?php
            $result = $db->prepare("SELECT * FROM notices ORDER BY id DESC Limit 5");
            $result->execute();
            for ($i = 0; $row = $result->fetch(); $i++) {
                ?>
                <li class="item event-item clearfix">
    <div class="widget-blog-content" style="width: 100%; max-width: 600px; margin: 0 auto;">
        <a href="news_post.php?id=<?php echo $row['id']; ?>"
           style="text-decoration: none; color: #0369A3; font-size: 18px;"><?php echo $row['title']; ?></a>
        <span class="meta-data" style="font-size: 16px;">
            <i class="fa fa-calendar-days" style="font-size: 14px;"></i><?php echo $row['date']; ?>
        </span>
    </div>
</li>

            <?php } ?>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</br>
</br>
