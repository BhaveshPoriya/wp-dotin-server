<!-- pricing Section -->
<section id="pricing" class="section_p">
    <div class="pricing_div">
        <div class="container">
            <div class="row" data-scrollreveal="enter left after 0s over 0.1s">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head wow pulse"><?php echo esc_attr(get_theme_mod('orbitr_pricing_main_heading', __('Checkout Pricing Section','orbitr'))); ?></h2>
                    <hr class="pricing_sep">
                    <p class="main_desc wow pulse"><?php echo esc_attr(get_theme_mod('orbitr_pricing_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','orbitr'))); ?></p>
                </div>
            </div>
            <div class="row" data-scrollreveal="enter left after 0s over 0.1s">
                <div class="pricing_wrapper">
                    <style></style>
                    <div class="col-md-4">
                        <div class="pricing_item one wow flipInX" style="animation-delay: .3s;">
                            <ul>
                                <li class="table_icon"><i class="fa <?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_icon', 'fa-camera-retro')); ?> fa-4x"></i></li>
                                <li class="table_heading"><h3><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_heading', __('Single Plan','orbitr'))); ?></h3></li>
                                <li class="table_price"><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_price', '$59')); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_feature1', __('Unlimited Access','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_feature2', __('20 GB Storage','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_feature3', __('200 Cups of Coffee Free','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_feature4', __('6 Months Support','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_feature5', __('Full Theme Access','orbitr'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(get_theme_mod('orbitr_pricing_box1_button_link', '#')); ?>"><?php echo esc_attr(get_theme_mod('orbitr_pricing_box1_button_text', __('View Theme','orbitr'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing_item two wow flipInX" style="animation-delay: .6s;">
                            <ul>
                                <li class="table_icon"><i class="fa <?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_icon', 'fa-coffee')); ?> fa-4x"></i></li>
                                <li class="table_heading"><h3><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_heading', __('Multiple Plan','orbitr'))); ?></h3></li>
                                <li class="table_price" <?php echo "style='color:" . get_theme_mod('orbitr_pricing_box_pricing_color', '#fff') . "; border-color:" . get_theme_mod('orbitr_pricing_box_pricing_bottom_border_color', '#F8C841') . ";'"; ?>><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_price', '$99')); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_feature1', __('Unlimited Access','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_feature2', __('20 GB Storage','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_feature3', __('200 Cups of Coffee Free','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_feature4', __('6 Months Support','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_feature5', __('Full Theme Access','orbitr'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(get_theme_mod('orbitr_pricing_box2_button_link', '#')); ?>"><?php echo esc_attr(get_theme_mod('orbitr_pricing_box2_button_text', __('View Theme','orbitr'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing_item three wow flipInX" style="animation-delay: .9s;">
                            <ul>
                                <li class="table_icon"><i class="fa <?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_icon', 'fa-tachometer')); ?> fa-4x"></i></li>
                                <li class="table_heading"><h3><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_heading', __('Full Member','orbitr'))); ?></h3></li>
                                <li class="table_price" <?php echo "style='color:" . get_theme_mod('orbitr_pricing_box_pricing_color', '#fff') . "; border-color:" . get_theme_mod('orbitr_pricing_box_pricing_bottom_border_color', '#F8C841') . ";'"; ?>><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_price', '$250')); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_feature1', __('Unlimited Access','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_feature2', __('20 GB Storage','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_feature3', __('200 Cups of Coffee Free','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_feature4', __('6 Months Support','orbitr'))); ?></li>
                                <li><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_feature5', __('Full Theme Access','orbitr'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(get_theme_mod('orbitr_pricing_box3_button_link', '#')); ?>"><?php echo esc_attr(get_theme_mod('orbitr_pricing_box3_button_text', __('View Theme','orbitr'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ pricing Section -->