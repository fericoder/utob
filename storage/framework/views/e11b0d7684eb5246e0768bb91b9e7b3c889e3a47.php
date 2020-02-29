<?php $__env->startSection('content'); ?>




    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- Page Title -->
            <section style="background-image: url(<?php echo e($treatment->image); ?>);!important;"
                     class=" page-title">
                <div class="container">
                    <div class="page-title-wrapper">
                        <div class="page-title-content">
                            <ol class="breadcrumb">
                                <li><a href="/" class="link home">صفحه اصلی</a></li>
                                <li><a href="<?php echo e(route('treatments')); ?>" class="link">درمان ها</a></li>
                                <li><a href="<?php echo e(route('treatment', $treatment->id )); ?>" class="link"><?php echo e($treatment->name); ?></a></li>
                            </ol>
                            <div class="clearfix"></div>
                            <h2 style="margin-bottom: 35px;" class="captions">
                                <?php echo e($treatment->name); ?>

                            </h2>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
              <div class="hotel-view-main padding-top padding-bottom entry-content">
                              <div class="container">

                                  <?php if($treatment->id == 5): ?>
                                      <div style="display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
                                          <?php $__currentLoopData = $treatments->where('parent_id', 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <div style="width: 150px;height: 100px; margin: 5px;padding: 5px;" class="item feature-item">
                                                  <a style="color: #0e99b6" href="<?php echo e(route('treatment', $treatment->id)); ?>"><img style="width: 40px;height: 40px; margin: auto; margin-bottom: 10px" src="<?php echo e($treatment->icon); ?>" alt="">
                                                      <div class="text">
                                                          <?php echo e($treatment->name); ?>

                                                      </div>
                                                  </a>
                                              </div>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                  </div>
                                  <div class="journey-block">
                                      <div class="overview-block clearfix slz-shortcode sc-block-13351890685e273ad44c072 ">
                                          <div class="timeline-container">
                                              <div class="timeline timeline-hotel-view">
                                                  <div class="timeline-block">
                                                      <div class="timeline-title"><span> <?php echo e($treatment->name); ?></span></div>
                                                      <div class="timeline-point">
                                                          <i class="fa fa-circle-o"></i>
                                                      </div>

                                                      <div class="timeline-content">
                                                          <div class="row">
                                                              <div style="display: none" class="timeline-custom-col">
                                                                  <div class="image-hotel-view-block">
                                                                      <div class="slider-for">
                                                                          <div class="item"><img width="600" height="270"
                                                                                                 src="/utob-content/uploads/2018/10/bini.jpg"
                                                                                                 class="" alt="img-2"
                                                                                                 />
                                                                          </div>
                                                                          <div class="item"><img width="600" height="270"
                                                                                                 src="/utob-content/uploads/2018/10/bini2.jpg"
                                                                                                 class=""
                                                                                                 alt="wall-interior-design-ideas-12"/>
                                                                          </div>
                                                                          <div class="item"><img width="600" height="270"
                                                                                                 src="/utob-content/uploads/2018/10/bini3.jpg"
                                                                                                 class=""
                                                                                                 alt="elderly-person-home-3"/></div>


                                                                      </div>
                                                                      <div class="slider-nav">
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini4.jpg"
                                                                                                 class="" alt="img-2"/></div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini9.jpg"
                                                                                                 class=""
                                                                                                 alt="wall-interior-design-ideas-12"/>
                                                                          </div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini6.jpg"
                                                                                                 class=""
                                                                                                 alt="elderly-person-home-3"/></div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini7.jpg"
                                                                                                 class=""
                                                                                                 alt="Classic-With-A-Twist10"/></div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini8.jpg"
                                                                                                 class="" alt="1401766004"/></div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini9.jpg"
                                                                                                 class=""
                                                                                                 alt="141ee95937e2a3229f6830c5dd0ec2ad"/>
                                                                          </div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini.jpg"
                                                                                                 class="" alt="img-2"/></div>
                                                                          <div class="item"><img width="116" height="63"
                                                                                                 src="/utob-content/uploads/2018/10/bini2.jpg"
                                                                                                 class="" alt="img-1"/></div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="timeline-custom-col full timeline-book-block"></div>


                                                              <div class="col-md-12 blog-post post-249 post type-post status-publish format-video has-post-thumbnail hentry category-adventure category-discover category-explore tag-adventure tag-explore tag-traveler post_format-post-format-video">
                                                                  <div class="blog-content">
                                                                      <div class="col-xs-12 content-wrapper">
                                                                          <div style="padding: 20px" class="preview">
                                                                              <?php echo $treatment->body; ?>

                                                                              <p style="text-align: center"><br><br><a data-toggle="modal" data-target="#freeConsultant" class="btn btn-maincolor btn-maincolor1-12960595115e1ec8d471431 ">مشاوره رایگان</a></p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>


                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1463096648310">
                      <div class="slz_col-sm-12 wpb_column vc_column_container vc_col-sm-12">
                          <div class="vc_column-inner vc_custom_1468574547376">
                              <div class="wpb_wrapper">
                                  <div class="slz-shortcode block-title-16339022535e1ec8d10ad08 ">

                                      <div class="group-title">
                                          <div class="sub-title"><p class="text">پکیج ها</p>
                                              <i class="icons flaticon-people"></i>
                                          </div>
                                          <h2 class="main-title">پکیج ها</h2>
                                      </div>
                                  </div>


                                  <?php echo $__env->make('layouts.partials.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                              </div>
                          </div>
                      </div>
                  </div>






                  <div class="slz-shortcode block-title-16339022535e1ec8d10ad08 ">

                      <div class="group-title">
                          <div class="sub-title"><p class="text">مسیر</p>
                              <i class="icons flaticon-people"></i>
                          </div>
                          <h2 class="main-title">مسیر درمان در یوتاب مد</h2>
                      </div>
                  </div>
                  <div class="vc_row wpb_row vc_row-fluid vc_custom_1466739801596">
                      <div class="wpb_column vc_column_container vc_col-sm-12">
                          <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                  <div class="slz-shortcode list-continents item-list-style06 item-list-17193194245e566a62198cb ">
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons flaticon-transport-1"></i><span class="text">ورودبه فرودگاه</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons flaticon-building"></i><span class="text">رفتن به هتل</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons fa fa-user-md"></i><span class="text">آزمایش|ویزیت</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons fa fa-medkit"></i><span class="text">بیمارستان</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons fa fa-bed"></i><span class="text">هتل | استراحت</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons fa fa-thumbs-up"></i><span class="text">ویزیت نهایی</span></div>
                                      </div>
                                      <div class="list-continent-wrapper">
                                          <div class="continent"><i class="icons flaticon-food-3"></i><span class="text">همراهی تا فرودگاه</span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>






                              <div class="container">
                                  <div class="slz-shortcode special-offer margin-top70">
                                      <h3 class="title-style-2">دیگر درمان ها</h3>
                                      <div class="special-offer-list">

                                        <?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <div class="special-offer-layout post-185 slzexploore_hotel">
                                                  <div style="height: 160px!important;" class="image-wrapper">
                                                      <a class="link" href="<?php echo e(route('treatment', $treatment->id )); ?>"><img style="height: 160px!important;" width="342"  src="<?php echo e($treatment->image); ?>" class="img-responsive" alt="316_langham_modern_Exterior"/></a>
                                                      <div class="title-wrapper"><a href="" class="title"><?php echo e($treatment->name); ?></a><i class="icons flaticon-circle"></i>
                                                      </div>
                                                  </div>
                                              </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- MAIN CONTENT-->
                  </div>
                  <!-- WRAPPER -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web Projects\Laravel\utob\resources\views/app/treatment/show.blade.php ENDPATH**/ ?>