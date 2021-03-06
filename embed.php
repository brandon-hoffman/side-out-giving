<?php include( './inc/header.php'); ?>


<div style="max-width: 430px; margin: 0 auto; padding: 8rem 0;">

    <div class="donation-form-wrapper">

        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">
                <span>1</span>Donation
            </li>
            <li class="tab-link" data-tab="tab-2">
                <span>2</span>Contact
            </li>
            <li class="tab-link" data-tab="tab-2">
                <span>3</span>Payment
            </li>
        </ul>

        <div class="donation-form">

        <div class="donation-amount form-group">
            <label for="">How much would you like to donate?</label>
            <div class="switch-field donation-buttons">
                <input type="radio" id="switch_1" name="switch" value="no">
                <label for="switch_1">$25</label>
                <input type="radio" id="switch_2" name="switch" value="no" checked>
                <label for="switch_2">$50</label>
                <input type="radio" id="switch_3" name="switch" value="no">
                <label for="switch_3">$75</label>
                <input type="radio" id="switch_4" name="switch" value="no">
                <label for="switch_4">$100</label>
                <input type="radio" id="switch_5" name="switch" value="no">
                <label for="switch_5">$500</label>
                <input type="radio" id="switch_6" name="switch" value="no">
                <label for="switch_6">Other</label>
            </div>
        </div>

        <div class="donation-type form-group">
            <label for="">How would you like to donate?</label>
            <div class="switch-field donation-buttons donation-frequency">
                <input type="radio" id="one-time" name="type" value="no" checked>
                <label for="one-time">One Time</label>
                <input type="radio" id="monthly" name="type" value="no">
                <label for="monthly">Monthly</label>
            </div>
        </div>

        <div class="form-check">
            <label>
                <input type="checkbox" name="anonymously" value="1" tabindex="">
                I would like to make this donation anonymously
            </label>
        </div>

        <div class="form-check">
            <label>
                <input type="checkbox" name="in-honor" value="1" tabindex="">
                Give in honor or in memory of a loved one
            </label>
        </div>

        <div class="form-actions">
            <button class="btn next">Next</button>
            <div class="donation-added">
                Your Donation:
                <strong>$50</strong>
            </div>
        </div>

    </div><!-- .donation-form -->

</div>

</div>


    </div>
</div>


<?php include( './inc/footer.php'); ?>
