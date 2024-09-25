<?php include"header.php"; ?>

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Programmes</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a programme!")?>
                                            </div>
                                            <?php endif;?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>programme Detail</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //include('../connect.php');
                        if (!isset($_GET["page"])) {
                            $_GET["page"] = 1;
                        }

                        $tbl_name = "programmes"; //your table name
                        // How many adjacent pages should be shown on each side?
                        $adjacents = 3;

                        $get_gallery = ORM::for_table("$tbl_name")
                            ->find_array();

                        $total_pages = count($get_gallery);

                        $limit = 10;
                        $page = $_GET['page'];
                        if ($page)
                            $start = ($page - 1) * $limit;
                        else
                            $start = 0;

                        $result = $db->prepare("SELECT * FROM programmes  ORDER BY id ASC LIMIT $start, $limit");
                        $result->execute();

                        if ($page == 0) $page = 1;
                        $prev = $page - 1;
                        $next = $page + 1;
                        $lastpage = ceil($total_pages / $limit);
                        $lpm1 = $lastpage - 1;
                        ?>

                        <span class="text-muted m-r-sm">Showing
                            <?php if ($lastpage == $next - 1) : ?>
                                <?= $total_pages ?>
                            <?php else : ?>
                                <?= $page * $limit ?>
                            <?php endif; ?>
                            of <?= $total_pages ?>
                        </span>

                        <div class="btn-group">
                            <?php if ($page != 1) : ?>
                                <a class="btn btn-default" href="?page=<?= $prev ?>"><i class="fa fa-angle-left"></i></a>
                            <?php endif; ?>

                            <?php if ($lastpage == $next - 1) : ?>

                            <?php else : ?>
                                <a class="btn btn-default" href="?page=<?= $next ?>"><i class="fa fa-angle-right"></i></a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <?php

                for ($i = 1; $row = $result->fetch(); $i++) {

                ?>

                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['prog-detail']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['venue']; ?></td>
                        <td><?php echo $row['phone']; ?></td>

                        <td>

                            <!-- Modified the edit button to trigger editing directly in the table row -->
                            <a class="fa fa-pen btn btn-success edit-btn" data-id="<?= $row['id'] ?>" data-title="<?= $row['title'] ?>" data-prog-detail="<?= $row['prog-detail'] ?>" data-date="<?= $row['date'] ?>" data-time="<?= $row['time'] ?>" data-venue="<?= $row['venue'] ?>" data-phone="<?= $row['phone'] ?>" href="#"> Edit</a>
                            <br>
                            <br>
                            <!-- <a href="delete-program.php?id=<?= $row['id'] ?>" class="fa fa-trash btn  btn-danger warning_4 delbtn"> Delete </a> -->

                        </td>

                    </tr>

                <?php } ?>
                <a href="add-program.php" class="fa fa-map btn  btn-success delbtn"> Add Program</a>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


<!-- JavaScript for handling editing -->
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get all edit buttons
        var editButtons = document.querySelectorAll('.edit-btn');

        // Loop through each edit button
        editButtons.forEach(function(button) {
            // Add click event listener
            button.addEventListener('click', function(event) {
                // Prevent default action
                event.preventDefault();

                // Get the data attributes of the clicked button
                var id = this.getAttribute('data-id');
                var title = this.getAttribute('data-title');
                var progDetail = this.getAttribute('data-prog-detail');
                var date = this.getAttribute('data-date');
                var time = this.getAttribute('data-time');
                var venue = this.getAttribute('data-venue');
                var phone = this.getAttribute('data-phone');

                // Find the parent table row
                var row = this.parentNode.parentNode;

                // Create input elements for editing
                var titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.value = title;

                var progDetailInput = document.createElement('input');
                progDetailInput.type = 'text';
                progDetailInput.value = progDetail;

                var dateInput = document.createElement('input');
                dateInput.type = 'text';
                dateInput.value = date;

                var timeInput = document.createElement('input');
                timeInput.type = 'text';
                timeInput.value = time;

                var venueInput = document.createElement('input');
                venueInput.type = 'text';
                venueInput.value = venue;

                var phoneInput = document.createElement('input');
                phoneInput.type = 'text';
                phoneInput.value = phone;

                // Replace the table row contents with editable inputs
                row.innerHTML = `
                    <th scope="row">${id}</th>
                    <td><input type="text" value="${title}" name="title"></td>
                    <td><input type="text" value="${progDetail}" name="prog-detail"></td>
                    <td><input type="text" value="${date}" name="date"></td>
                    <td><input type="text" value="${time}" name="time"></td>
                    <td><input type="text" value="${venue}" name="venue"></td>
                    <td><input type="text" value="${phone}" name="phone"></td>
                    <td>
                        <button class="btn btn-success save-btn">Save</button>
                    </td>
                `;

                // Handle save button click
                var saveButton = row.querySelector('.save-btn');
                saveButton.addEventListener('click', function() {
                    // Fetch the updated values from inputs
                    var updatedTitle = row.querySelector('input[name="title"]').value;
                    var updatedProgDetail = row.querySelector('input[name="prog-detail"]').value;
                    var updatedDate = row.querySelector('input[name="date"]').value;
                    var updatedTime = row.querySelector('input[name="time"]').value;
                    var updatedVenue = row.querySelector('input[name="venue"]').value;
                    var updatedPhone = row.querySelector('input[name="phone"]').value;

                    // Perform actions to save the updated values (e.g., AJAX request)

                    // For demonstration purposes, you can log the updated values
                    console.log("Updated Title:", updatedTitle);
                    console.log("Updated Prog Detail:", updatedProgDetail);
                    console.log("Updated Date:", updatedDate);
                    console.log("Updated Time:", updatedTime);
                    console.log("Updated Venue:", updatedVenue);
                    console.log("Updated Phone:", updatedPhone);

                    // Replace the editable inputs with the updated values
                    row.innerHTML = `
                        <th scope="row">${id}</th>
                        <td>${updatedTitle}</td>
                        <td>${updatedProgDetail}</td>
                        <td>${updatedDate}</td>
                        <td>${updatedTime}</td>
                        <td>${updatedVenue}</td>
                        <td>${updatedPhone}</td>
                        <td>
                            <a class="fa fa-pen btn btn-success edit-btn" data-id="${id}" data-title="${updatedTitle}" data-prog-detail="${updatedProgDetail}" data-date="${updatedDate}" data-time="${updatedTime}" data-venue="${updatedVenue}" data-phone="${updatedPhone}" href="#"> Edit</a>
                            <br>
                            <br>
                        </td>
                    `;
                });
            });
        });
    });
</script>
