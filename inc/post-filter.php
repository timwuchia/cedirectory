<form class='post-filters d-flex flex-wrap mb-3'>
    
    <select name='orderby' class="orderby-options mr-3">
        <option value="" disabled selected> - Order By - </option>
        <option value='title'>Title</option>
        <option value='date'>Date</option>
    </select>
    <select name='order' class="order-options mr-3">
        <option value="" disabled selected> - Order - </option>
        <option value='asc'>ASC</option>
        <option value='desc'>DESC</option>
    </select>
    
    <?php if(is_tax('directive') || is_tax('industry')) : ?>
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