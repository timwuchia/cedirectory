<?php 
    switch(get_row_layout()) :
        case 'text_block':
            get_template_part('layouts/flexible-content/text-block');
        break;
        case 'media':
            get_template_part('layouts/flexible-content/media');
        break;
        case 'two_col_layout':
            get_template_part('layouts/flexible-content/two-col-layout');
        break;
    endswitch;
?>