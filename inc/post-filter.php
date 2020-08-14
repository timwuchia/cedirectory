<div class='post-filters'>
    <select class="form-control sort-options">
        <option value="" disabled selected> - Sort By - </option>
        <option value='title'>Title</option>
        <option value='date'>Date</option>
    </select>
    <select class="form-control order-options">
        <option value="" disabled selected> - Order By - </option>
        <option value='DESC'>DESC</option>
        <option value='ASC'>ASC</option>
    </select>
    
    <?php if(is_tax('directory') || is_tax('industry')) : ?>
        <?php $countries =  get_field_object('country')['choices']; ?>
        <?php if($countries) : ?>
            <select class="form-control country-options">
                <option value="" disabled selected> - Choose Country - </option>
                <?php foreach($countries as $key=>$country) : ?>
                <option value='<?php echo $key; ?>'><?php echo $country; ?></option>
                <?php endforeach; ?>
            </select>
        <?php endif ?>

    <?php endif; ?>
</div>