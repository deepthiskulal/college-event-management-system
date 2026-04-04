<div class="container">
    <div class="col-md-12">
        <hr>
    </div>

    <div class="row">
        <section>
            <div class="container">
                <div class="col-md-6">
                    <!-- Event Image -->
                    <img src="<?php echo htmlspecialchars($row['img_link']); ?>" class="img-responsive" alt="Event Image">
                </div>

                <div class="subcontent col-md-6">
                    <!-- Event Details Box -->
                    <div class="event-box" style="padding: 15px; margin: 15px 0; border: 1px solid #ccc; border-radius: 8px;">
                        <h3><?php echo htmlspecialchars($row['event_title']); ?></h3>
                        <p><?php echo htmlspecialchars($row['event_description']); ?></p>
                        <p><strong>Venue:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                        <p><strong>Date:</strong> <?php echo htmlspecialchars($row['Date']); ?></p>
                        <p><strong>Time:</strong> <?php echo htmlspecialchars($row['time']); ?></p>
                        <p><strong>Student Coordinator:</strong> <?php echo htmlspecialchars($row['st_name']); ?> (<?php echo htmlspecialchars($row['student_contact']); ?>)</p>
                        <p><strong>Staff Coordinator:</strong> <?php echo htmlspecialchars($row['staff_name']); ?> (<?php echo htmlspecialchars($row['staff_contact']); ?>)</p>
                    </div>
                    
                    <!-- Register Button -->
                    <a class="btn btn-default" href="register.php">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span> Register
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
