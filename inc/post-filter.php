<form class='post-filters d-flex flex-wrap mb-3'>
    <select name='sortby' class="sort-options mr-3">
        <option value="" disabled selected> - Sort By - </option>
        <option value='title'>Title</option>
        <option value='date'>Date</option>
    </select>
    <select name='orderby' class="order-options mr-3">
        <option value="" disabled selected> - Order - </option>
        <option value='DESC'>DESC</option>
        <option value='ASC'>ASC</option>
    </select>
    
    <?php if(is_tax('directory') || is_tax('industry')) : ?>
        <?php $countries =  acf_get_field('country')['choices']; ?>
        <?php if($countries) : ?>
            <select name="country" class="country-options mr-3">
                <option value="" disabled selected> - Country - </option>
                <?php foreach($countries as $key=>$country) : ?>
                <option value='<?php echo $key; ?>'><?php echo $country; ?></option>
                <?php endforeach; ?>
            </select>
        <?php endif ?>

    <?php endif; ?>
    <button class='btn btn-primary' type='submit'>Apply</button>
</form>