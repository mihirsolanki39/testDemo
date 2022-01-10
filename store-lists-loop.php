<style>
.elementor-element-3484a80,.elementor-element-dd9efd4{margin-right: 25px !important;}
.elementor-element-6f9539d{margin-top: -130px !important;padding-left: 12px !important;    background: white !important;width: 90% !important;border-bottom-left-radius: 16px !important; border-top-right-radius: 16px !important;height: 110px !important;}
.elementor-element-5cf44ef img,.elementor-element-9a15c40 img,.elementor-element-639084f img,.elementor-element-7691dcb img,.elementor-element-98f7c81 img{border-radius:16px !important;}
.elementor-element-5cf44ef img{height: 450px !important;width: 390px !important;}
.elementor-element-59b9343,.elementor-element-e4e8b7d,.elementor-element-f1cde70,.elementor-element-51583c5{margin-top: -130px !important;padding-left: 12px !important;background: white !important;width: 90% !important;border-bottom-left-radius: 16px !important;   border-top-right-radius: 16px !important;height: 110px !important;}
#dokan-seller-listing-wrap{margin-top: 25px;}


/** new code**/

.elementor-8075 .elementor-element.elementor-element-3484a80 > .elementor-element-populated, .elementor-8075 .elementor-element.elementor-element-3484a80 > .elementor-element-populated > .elementor-background-overlay, .elementor-8075 .elementor-element.elementor-element-3484a80 > .elementor-background-slideshow {
    border-radius: 16px 16px 16px 16px;
}
img.lazyloaded {
    border-bottom-right-radius: 25px;
    padding: 12px;
}
</style>

<div id="dokan-seller-listing-wrap" class="grid-view">
<div class="seller-listing-content">

<?php if ( $sellers['users'] ) : ?>
<div class="main-side single full_width clearfix">
    <div data-elementor-type="section" data-elementor-id="8075" class="elementor elementor-8075" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4bd03ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4bd03ed" data-element_type="section">
                <div class="elementor-container elementor-column-gap-custom">
				
					<?php
						//$staticArray = array('38','27');
						$staticArray = array('38','37','35','32','31');
						$ik=1;
						foreach ( $sellers['users'] as $seller ) {
							//if (in_array($seller->ID, $_SESSION["vendorRecords"])){
							if (in_array($seller->ID, $staticArray)) {
								$vendor            = dokan()->vendor->get( $seller->ID );
								$store_banner_id   = $vendor->get_banner_id();
								$store_name        = $vendor->get_shop_name();
								$store_url         = $vendor->get_shop_url();
								$store_rating      = $vendor->get_rating();
								$is_store_featured = $vendor->is_featured();
								$store_phone       = $vendor->get_phone();
								$store_info        = dokan_get_store_info( $seller->ID );
								$store_address     = dokan_get_seller_short_address( $seller->ID );
								$store_banner_url  = $store_banner_id ? wp_get_attachment_image_src( $store_banner_id, $image_size ) : DOKAN_PLUGIN_ASSEST . '/images/default-store-banner.png';
								
								$show_store_open_close    = dokan_get_option( 'store_open_close', 'dokan_appearance', 'on' );
								$dokan_store_time_enabled = isset( $store_info['dokan_store_time_enabled'] ) ? $store_info['dokan_store_time_enabled'] : '';
								$store_open_is_on = ( 'on' === $show_store_open_close && 'yes' === $dokan_store_time_enabled && ! $is_store_featured ) ? 'store_open_is_on' : '';
					?>

        				    <?php if($ik==1){ ?>
        					    <!-- First Main Block -->
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3484a80" data-id="3484a80" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5cf44ef elementor-widget elementor-widget-image" data-id="5cf44ef" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="<?php echo is_array( $store_banner_url ) ? esc_attr( $store_banner_url[0] ) : esc_attr( $store_banner_url ); ?>" data-src="<?php echo is_array( $store_banner_url ) ? esc_attr( $store_banner_url[0] ) : esc_attr( $store_banner_url ); ?>" class="attachment-large size-large ls-is-cached lazyloaded" alt="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6f9539d elementor-widget elementor-widget-text-editor" data-id="6f9539d" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p style="font-size: 30px; font-weight: bold; font-family: Poppins;margin-top: 5px;"><span style="color: #000000;"><a href="<?php echo esc_url( $store_url ); ?>" target="_blank"><?php echo esc_html( $store_name ); ?></a></span></p>
                                                
                                                <p style="font-size: 15px; font-weight: bold;"><span style="color: #000000;"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;"></i>
                                                    <?php 
                                                        if($store_phone){
                                                            echo esc_html( $store_phone );
                                                        }else{
                                                            echo "N/A";
                                                        }
                                                    ?>
                                                </span></p>
                                                
                                                <p style="color: #fd736d; margin-top: 5px;">
                                                    <?php 
                                                        if($store_address){
                                                            echo wp_kses( $store_address, $allowed_tags ); 
                                                        }else{
                                                            echo "N/A";
                                                        }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End First Main Block -->
        				    <?php } ?>
                            <?php if($ik==2 || $ik==3){ ?>
            				    <!-- Second column 2 blocks -->
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dd9efd4" data-id="dd9efd4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <?php if($ik==2){ ?>
            							<div class="elementor-element elementor-element-9a15c40 elementor-widget elementor-widget-image" data-id="9a15c40" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" data-src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="" loading="lazy"/>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-59b9343 elementor-widget elementor-widget-text-editor" data-id="59b9343" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p style="font-size: 30px; font-weight: bold; font-family: Poppins;margin-top: 5px;"><span style="color: #000000;"><a href="#" target="_blank">Flowerful</a></span></p>
                                                <p style="font-size: 15px; font-weight: bold;"><span style="color: #000000;">Hand &amp; Craft Florist</span></p>
                                                <p style="color: #fd736d; margin-top: 5px;">Plant &amp; Flowers</p>
                                            </div>
                                        </div>
            							<?php } ?>

            							<?php if($ik==3){ ?>
                                        <div class="elementor-element elementor-element-639084f elementor-widget elementor-widget-image" data-id="639084f" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" data-src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="" loading="lazy"
                                                />
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f1cde70 elementor-widget elementor-widget-text-editor" data-id="f1cde70" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p style="font-size: 30px; font-weight: bold; font-family: Poppins;margin-top: 5px;"><span style="color: #000000;"><a href="#" target="_blank">Flowerful</a></span></p>
                                                <p style="font-size: 15px; font-weight: bold;"><span style="color: #000000;">Hand &amp; Craft Florist</span></p>
                                                <p style="color: #fd736d; margin-top: 5px;">Plant &amp; Flowers</p>
                                            </div>
                                        </div>
            							<?php } ?>
                                    </div>
                                </div>
            					<!-- End Second column 2 blocks -->
            				<?php } ?>
        			        <?php if($ik==4 || $ik==5){ ?>
            					<!-- Third column 2 blocks -->
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7a6d38e" data-id="7a6d38e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
            						 <?php if($ik==4){ ?>
                                        <div class="elementor-element elementor-element-7691dcb elementor-widget elementor-widget-image" data-id="7691dcb" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" data-src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e4e8b7d elementor-widget elementor-widget-text-editor" data-id="e4e8b7d" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p style="font-size: 30px; font-weight: bold; font-family: Poppins;margin-top: 5px;"><span style="color: #000000;"><a href="#" target="_blank">Flowerful</a></span></p>
                                                <p style="font-size: 15px; font-weight: bold;"><span style="color: #000000;">Hand &amp; Craft Florist</span></p>
                                                <p style="color: #fd736d; margin-top: 5px;">Plant &amp; Flowers</p>
                                            </div>
                                        </div>
            							<?php } ?>
            							<?php if($ik==5){ ?>
                                        <div class="elementor-element elementor-element-98f7c81 elementor-widget elementor-widget-image" data-id="98f7c81" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" data-src="http://localhost/FarAndFound/wp-content/uploads/2022/01/banner3-1024x581.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="" loading="lazy"
                                                />
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-51583c5 elementor-widget elementor-widget-text-editor" data-id="51583c5" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p style="font-size: 30px; font-weight: bold; font-family: Poppins;margin-top: 5px;"><span style="color: #000000;"><a href="#" target="_blank">Flowerful</a></span></p>
                                                <p style="font-size: 15px; font-weight: bold;"><span style="color: #000000;">Hand &amp; Craft Florist</span></p>
                                                <p style="color: #fd736d; margin-top: 5px;">Plant &amp; Flowers</p>
                                            </div>
                                        </div>
            							<?php } ?>
                                    </div>
                                </div>
            					<!-- End Third column 2 blocks -->
        					<?php } ?>
                    <div class="dokan-clearfix"></div>
                    <?php
                            }
                            $ik++;
                        }
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
<?php else: ?>
	<p class="dokan-error"><?php esc_html_e( 'No vendor found!', 'dokan-lite' ); ?></p>
<?php endif; ?>
</div>
</div>