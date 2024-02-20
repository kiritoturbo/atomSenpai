<?php
//filter taxonomy
function selectTaxonomy($inputTaxonomy){
    // Lấy danh sách các công ty từ taxonomy "Companies"
    $companies = get_terms( array(
        'taxonomy' => $inputTaxonomy,
        'hide_empty' => false,
    ) );

    // Lấy giá trị của trường chọn taxonomy nếu đã được gửi đi
    // $selected_company = isset( $_POST['archive-dropdown'] ) ? sanitize_text_field( $_POST['archive-dropdown'] ) : '';
   
    ?>

    <form action="" method="post">
        <select name="archive-dropdown" id="company" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value="<?php echo home_url(); ?>">All</option>
            <?php foreach ( $companies as $company ) : ?>
                <?php
                    $term_link = get_term_link( $company );
                ?>
                <option value="<?php echo esc_url( $term_link ); ?>" <?php selected($company->slug ); ?>><?php echo esc_html( $company->name ); ?></option>
                
            <?php endforeach; ?>
        </select>
    </form>
    <?php
}
