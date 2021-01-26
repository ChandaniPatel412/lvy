<div class="landingContent2">
	
    <section class="registrationSection">
    
    	<div class="landingLogo">
            <a href="/"><img src="images/IvyLogo.png" width="190px" /></a>
        </div>
        
        
        <form name="form" id="form" method="post" action="_scripts/sendmail">
        <?php if(isset($_GET['captchaError'])) { ?>
        <div class="bodyText captchaResponse"> 
            There was an error accepting your security code response, please retry.
        </div>
        <?php } ?>
            <div class="formBlock">
            	<h1 class="Header">
                    registration
                </h1>
            
                <div class="formElement left">
                    <div class="formRow input">
                        <input type="text" id="firstName" name="firstName" title="Your first name is required." class="required text4" minlength="2" tabindex="1" placeholder="first name *" />
                    </div>
                </div>
                
                <div class="formElement end">
                    <div class="formRow input">
                        <input type="text" name="lastName" id="lastName" title="Your last name is required." class="required" minlength="2" tabindex="2" placeholder="last name *" />
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="formElement left">
                    <div class="formRow input">
                        <input type="tel" name="telephone" id="telephone" title="A valid phone number is required." class="required" minlength="10" tabindex="3" placeholder="telephone *" />
                    </div>
                </div>
                
                <div class="formElement end">
                    <div class="formRow input">
                        <input type="text" name="email" id="email" class="required" data-rule-required="true" data-rule-email="true" data-msg-required="Your email address is required." data-msg-email="Please enter a valid email address." tabindex="4" placeholder="email *" />
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="formElement left">
                    <div class="formRow input">
                        <input type="text" name="postal_code" id="postal_code" title="Your postal code is required." class="required" minlength="6" tabindex="5" placeholder="postal code *" />
                    </div>
                </div>
                
                
                
                <div class="formElement end">
                    <div class="formRow fullrow input AdvRow">
                        <select class="required selectpicker" data-width="100%" data-size="12" name="adv" id="adv" title="How did you hear about us?" minlength="1" tabindex="8" placeholder="how did you hear about us? *" />
                        <option value="" selected>how did you hear about us? *</option>
                        <option value="1">Signage</option>
                        <option value="5">Website</option>
                        <option value="50">Email Promotion</option>
                        <option value="11">Condo Guide</option>
                        <option value="12">Condo Life</option>
                        <option value="168">The Weekly Voice</option>
                        <option value="185">The Weekly Asian Connections</option>
                        <option value="110">Epoch Times</option>
                        <option value="172">Chinese Real Estate Weekly (CREW)</option>
                        <option value="173">City Property Guide</option>
                        <option value="174">Lifetime Realty Weekly</option>
                        <option value="175">Property Weekly</option>
                        <option value="176">701 magazine</option>
                        <option value="177">Realty Weekly</option>
                        <option value="178">Fame Weekly</option>
                        <option value="94">Facebook</option>
                        <option value="95">Twitter</option>
                        <option value="13">Friends/Relatives</option>
                        <option value="133">Google Search</option>
                        <option value="100">Realtor </option>
                        <option value="14">Other </option>
                        </select>
                        <div class="clear"></div>
                        <div name="brokerreferral_field" id="brokerreferral_field" class="BrokerReferralBlock">
                            <div class="BrokerRefer">
                                <input type="text" placeholder="Broker Referral" name="adv_brokerreferral" id="adv_brokerreferral" value="" class="inputField2" title="broker referral" />
                            </div>
                        </div>
                        <div name="other_field" id="other_field" class="OtherBlock">
                            <div class="OtherInput">
                                <input type="text" placeholder="Enter Source" name="adv_other" id="adv_other" value="" class="inputField2" title="Enter Source" />
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="formElement left"> 
                    <div class="formRow input radioinput BrokerRow">
                        <fieldset class="realtor"> 
                            <label>are you a realtor?</label>                                         
                            <input type="radio" name="realtor" id="realtor_yes" value="yes" tabindex="9">
                            <label for="realtor_yes" class="YesLabel">yes</label>
                            <input name="realtor" type="radio" id="realtor_no" tabindex="9" value="no" title="radio" checked>
                            <label for="realtor_no">no </label>
                        </fieldset>
                        <div class="clear"></div>
                        <div name="broker_name" id="broker_name" class="brokerageBlock">
                            <!--<label for="brokerage" class="BrokerageLabel">Brokerage: </label>-->
                            <div class="BrokerageInput">
                                <input type="text" placeholder="Enter Agent &amp; Brokerage" name="brokerage" id="brokerage" value="" class="inputField2" title="brokerage" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="formElement end">
                    <div class="formRow input">
                        <input type="text" name="Comments" id="Comments" title="Comments" minlength="6" tabindex="10" placeholder="comments" />
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="formElement additionalSpace3 left">
                    <div class="formRow label">
                        <label for="secFcode" <?php if(isset($_GET['captchaError'])){  echo("class=\"error\""); } ?>pg-id="178">complete the security code 
                            <span class="asterisk <?php if(isset($_GET['captchaError'])){ ?>error<?php } ?> ">*</span>
                        </label>
                        <div class="clear labelgap2"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="formRow securityinput">
                        <div class="securityInput secImage">
                            <?php dsp_crypt(0,1); ?>
                        </div>
                        <div class="securityInput secField">
                            <input type="text" id="secFcode" name="secFcode" title="Please complete the security field." class="required" minlength="5">
                        </div>
                    </div>
                </div>
                
                
                
                <div class="formElement end additionalSpace">
                    <div class="formRow fullrow optin">
                        
                        <div class="signMeUp label">
                            <p>sign me up!</p>
                        </div>
                        <div class="signMeUp">
                            <input type="checkbox" name="opt-approve" id="opt-approve" value="1" style="width:20px;" title="opt-approve" />
                        </div>
                        <div class="clear"></div>
                        <div class="signUpText">
                        Yes, I'd like to receive more information about IVY and other projects from The Sher Corporation or such other third party marketing agency. You are able to unsubscribe at any time.</div>
                    </div>
                </div>
                
                <div class="SubmitClear"></div>
                
                <div class="formElement end2">
                    <div class="formRow fullrow submit">
                        <input type="hidden" id="cid" name="cid" />
                        <input type="hidden" name="PostAction" id="PostAction" value="http://test.theparkclubcondos.com/ThankYou" />
                        <INPUT type="submit" name="submitBTN" value="submit" border="0" />
                    </div>
                </div>
                <div class="clear"></div>
            
        </form>
        
    </section>
</div>







<!--========== REVOLUTION SLIDER ==========-->
<div class="rev_slider_wrapper fullwidthbanner-container IntroSlider" style="margin: 0 auto; background-color: rgba(255, 255, 255, 0); padding: 0; color: #fff; margin-top: 0; margin-bottom: 0;">
    <div id="rev-slider5" class="rev_slider fullwidthabanner" style="display: none;">
        <ul>
            <!-- Slide -->
            <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-delay="20500" data-title="First Priority">
                <!-- Main Image -->
                <img src="images/videoImage.jpg" style='background-color: #000' alt="" data-bgposition="center center"  data-bgrepeat="no-repeat" data-title="Intro" data-description="" data-no-retina>
                <!-- Layers -->
                <div class="Pattern">
				</div>

                <div class="rs-background-video-layer"
                    data-forcerewind="on"
                    data-volume="mute"
                    data-videowidth="100%"
                    data-videoheight="100%"
                    data-videomp4="../video/Sequence 01_3.mp4"
                    data-videopreload="preload"
                    data-videoloop="loopandnoslidestop"
                    data-forceCover="1"
                    data-aspectratio="16:9"
                    data-autoplay="true"
                    data-autoplayonlyfirsttime="true"
                    data-nextslideatend="true">
                </div>
                
               
                <div class="tp-caption tp-resizeme color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-50']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['60','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="500"
                    data-end="4500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap; letter-spacing:1px;">
                    coming soon to downtown toronto
                </div>
                
                <div class="tp-caption tp-resizeme color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-50']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['60','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="5000"
                    data-end="10000"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap; letter-spacing:1px;">
                    32 storeys tower, 3 mins to ryerson, 7 mins to eaton centre and dundas station
                </div>
                
                <div class="tp-caption tp-resizeme color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-50']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['60','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="10500"
                    data-end="16000"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap; letter-spacing:1px;">
                    a fresh approach to urban living
                </div>
                
                <div class="tp-caption tp-resizeme color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-50']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['60','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="16500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap; letter-spacing:1px;">
                    this is ivy , downtown condos from the low $300s
                </div>
            </li>
            <!-- End Slide -->
            
            <!-- Slide -->
                <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Landing Page Slide" data-delay="4000">
                    <!-- Main Image -->
                    <img src="images/LandingImage2.jpg" alt="Ivy Image" data-bgposition="right center" data-kenburns="on" data-duration="1" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="109" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>
                <!-- End Slide -->
                
                <!-- Slide -->
                <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Landing Page Slide">
                    <!-- Main Image -->
                    <img src="images/LandingImage.jpg" alt="Ivy Image" data-bgposition="left bottom" data-kenburns="on" data-duration="1" data-ease="Linear.easeNone" data-scalestart="109" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 500" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>
                <!-- End Slide -->
                
        </ul>
    </div>
</div>

<div class="skipIntroBtnContainer">
    <div class="skipIntroBtn">
        skip
    </div>
</div>
<!--========== END REVOLUTION SLIDER ==========-->


