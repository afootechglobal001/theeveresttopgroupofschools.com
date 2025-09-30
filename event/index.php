<?php include '../config/constants.php';?>
<?php include '../config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../meta.php'?>
    <title><?php echo $thename?> | Events | Celebrate Excellence</title>  
    <meta name="keywords" content="<?php echo $thename?>, Everest Top Group of Schools events, Everest Top Academy Sagamu activities, school calendar Ogun State, upcoming events Sagamu schools, private schools Ogun State programs, international schools Sagamu celebrations, Everest Top Schools workshops, Sagamu Ogun State educational events, Everest Top Academy achievements, school cultural events Ogun State, creativity-focused programs, holistic education activities Sagamu, innovative teaching events, family-friendly school events Sagamu, educational excellence celebrations" />
    <meta name="description" content="Stay updated with The Everest Top Group of Schools events in Sagamu, Ogun State. Join us for workshops, celebrations, and activities that foster creativity, collaboration, and academic excellence." />

    <meta property="og:title" content="<?php echo $thename?> | Events | Celebrate Excellence" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/everesttopacademy.jpg" />
    <meta property="og:description" content="Stay updated with The Everest Top Group of Schools events in Sagamu, Ogun State. Join us for workshops, celebrations, and activities that foster creativity, collaboration, and academic excellence." />

    <meta name="twitter:title" content="<?php echo $thename?> | Events | Celebrate Excellence" />
    <meta name="twitter:card" content="<?php echo $thename?>" />
    <meta name="twitter:image" content="<?php echo $website_url?>/all-images/plugin-pix/everesttopacademy.jpg" />
    <meta name="twitter:description" content="Stay updated with The Everest Top Group of Schools events in Sagamu, Ogun State. Join us for workshops, celebrations, and activities that foster creativity, collaboration, and academic excellence." />
</head>

<body>
    <?php  include '../header.php'?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                        <a href="<?php echo $website_url?>/blog/"><li title="Event">Event</li></a>					
                    </ul>
                </div>			
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Event</span></h1>
                <p>Join us for an unforgettable experience filled with meaningful moments, engaging activities, and opportunities to connect.</p>                
           
                <?php $callclass->_otherPagesBtn($website_url);?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <div class="menu-btn-div">
            <div class="btn-div-in">
                <button class="menu-btn active-btn" id="next-recent" title="UPCOMING EVENTS" onclick="_next_event_page('recent-hide-div','recent');">UPCOMING EVENTS</button>
                <button class="menu-btn" id="next-past" title="PAST EVENTS" onclick="_next_event_page('past-hide-div','past');">PAST EVENTS</button>          
            </div>
        </div>

        <div id="recent-hide-div">
            <section class="body-div">
                <div class="body-div-in">
                    <div class="main-event-back-div">
                        <a id="event-link" title="Pastor Mrs. Fatile S. Femi">
                        <div class="upcoming-event-div"> 
                            <div class="event-title">Upcoming Event</div>  
                            <div class="img-div">
                                <img id="event_preview" src="<?php echo $website_url?>/api/uploaded-files/dev/event-pix/default.jpg" alt="Event"/>
                            </div> 

                            <div class="content-div">
                                <div class="event-date-back-div">
                                    <div class="date-div">
                                        <div class="event-date" id="event_day">0</div>
                                        <div class="event-month" id="event_month">0</div>
                                    </div>

                                    <div class="event-div">
                                        <h4 id="reg_title">No Upcoming Events! Check Back Soon.</h4>
                                        <div class="event-time"><i class="bi-calendar-check"></i> <em id="event_start_time"></em> - <em id="event_end_time"></em> </div>  
                                        <div class="event-time"><i class="bi-geo-alt"></i> <em id="event_location"></em></div> 
                                    </div>  
                                </div>
                                <p id="seo_description"></p>
                                <div class="time-div">
                                    <div class="time">                              
                                        <h3 id="days">0:0</h3>
                                        <span>DAY</span>
                                    </div>
                                    <div class="time">                              
                                        <h3 id="hours">0:0</h3>
                                        <span>HRS</span>
                                    </div>
                                    <div class="time">                              
                                        <h3 id="minutes">0:0</h3>
                                        <span>MIN</span>
                                    </div>
                                    <div class="time no-border">                              
                                        <h3 id="seconds">0:0</h3>
                                        <span>SEC</span>
                                    </div>
                                </div> 
                                <script>_startCountdown(targetDate);</script>
                            </div> 
                        </div></a>
                    </div>
                </div>
                <script>_fetchPageUpcomingEvent();</script>
            </section> 

            <section class="body-div main-event-body-div">
                <div class="body-div-in">
                    <div class="main-pages-back-div">
                        <div class="title-div main-event-title" data-aos="fade-in" data-aos-duration="1200">
                            <div class="top-div">
                                <h2>Related Upcoming Events</h2> 
                            </div>  
                        </div>

                        <div class="list-event-back-div" id="fetchMainRelatedUpcominEvent">
                            <script>_fetchMainRelatedUpcominEvent();</script>
                        </div>
                    </div>
                </div>
            </section> 
        </div>

        <div id="past-hide-div">
            <section class="body-div main-event-body-div">
                <div class="body-div-in">           
                    <div class="list-event-back-div" id="fetchPastEvent">
                       <script>_fetchRelatedEvent();</script>
                    </div>
                </div>
            </section> 
        </div>

        <?php include '../footer.php'?>
    </section>
                  
</body>
</html>


