<div class="videoLogo">
	<a href="/"><img src="images/IvyLogo.png" class="logo" /></a>
    <div class="logoText2">
    	a fresh approach<br/>
        to downtown living
    </div>
    <div class="soldOutText">
    	sold out
    </div>
</div>

<div class="registrationSectionContainer">

<section class="registrationSection">
    
    <form name="form" id="form" method="post" action="_scripts/sendmail">
    <?php /*if(isset($_GET['captchaError'])) { ?>
    <div class="bodyText captchaResponse"> 
        There was an error accepting your security code response, please retry.
    </div>
    <?php }*/ ?>
    <div class="formBlock">
    
        <h1 class="Header">
            register
        </h1>
    
        <div class="formElement left">
            <div class="formRow input">
                <input type="text" id="firstName" name="firstName" title="your first name is required." class="required text4" minlength="2" tabindex="1" placeholder="first name *" />
            </div>
        </div>
        
        <div class="formElement end">
            <div class="formRow input">
                <input type="text" name="lastName" id="lastName" title="your last name is required." class="required" minlength="2" tabindex="2" placeholder="last name *" />
            </div>
        </div>
        
        <div class="formElement left">
            <div class="formRow input">
                <input type="tel" name="telephone" id="telephone" title="a valid phone number is required." class="required" minlength="10" tabindex="3" placeholder="telephone *" />
            </div>
        </div>
        
        <div class="formElement end">
            <div class="formRow input">
                <input type="text" name="email" id="email" class="required" data-rule-required="true" data-rule-email="true" data-msg-required="your email address is required." data-msg-email="please enter a valid email address." tabindex="4" placeholder="email *" />
            </div>
        </div>
        
        <div class="formElement left">
            <div class="formRow input">
                <input type="text" name="postal_code" id="postal_code" title="your postal code is required." class="required" minlength="6" tabindex="5" placeholder="postal code *" />
            </div>
        </div>

        <div class="formElement end">
            <div class="formRow fullrow">
                <select class="required selectpicker" data-width="100%" data-size="12" name="space" id="space" title="preferred type of suite" minlength="1" tabindex="7">
                    <option value="" selected>preferred type of suite *</option>
                    <option value="2">one bedroom</option>
                    <option value="3">one bedroom + den</option>
                    <option value="4">two bedroom</option>
                    <option value="5">two bedroom + den</option>
                    <option value="11">three bedroom</option>
                </select>
            </div>
        </div>
        
        <div class="RealtorOptions">
            <div class="formElement left AgentContainer">
                <div class="formRow input radioinput HaveAgentRow">
                
                    <label>work with a realtor?</label>
                    <div class="control-group">
                        <label class="control control--checkbox haveAgent_status">yes
                            <input name="haveAgent" id="haveAgent_yes" type="radio" value="yes"/>
                            <div class="control__indicator"></div>
                        </label>
                        <label class="control control--checkbox haveAgent_status">no
                            <input name="haveAgent" id="haveAgent_no" type="radio" value="no" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                    <div style="clear:both"></div>
                    <div name="haveAgent_name" id="haveAgent_name" class="haveAgentBlock">
                        <div class="haveAgentInput">
                            <input type="text" placeholder="specify agent &amp; brokerage" name="haveAgentName" id="haveAgentName" value="" class="inputField2" title="agent" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="formElement left RealtorContainer"> 
                <div class="formRow input radioinput BrokerRow">
                
                    <label>are you a realtor?</label>
                    <div class="control-group second">
                        <label class="control control--checkbox realtor_status">yes
                            <input name="realtor" id="realtor_yes" type="radio" value="yes"/>
                            <div class="control__indicator"></div>
                        </label>
                        <label class="control control--checkbox realtor_status">no
                            <input name="realtor" id="realtor_no" type="radio" value="no" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                    <div style="clear:both"></div>
                    <div name="broker_name" id="broker_name" class="brokerageBlock">
                        <div class="BrokerageInput">
                            <input type="text" placeholder="specify agent &amp; brokerage" name="brokerage" id="brokerage" value="" class="inputField2" title="brokerage" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="smallClear"></div>
        
        <div class="formElement end howHearBlock">
            <div class="formRow fullrow input AdvRow">
                <select class="required selectpicker" data-width="100%" data-size="12" name="adv" id="adv" title="how did you hear about us?" minlength="1" tabindex="8" placeholder="how did you hear about us? *" />
                <option value="" selected>how did you hear about us? *</option>
                <option value="1">signage</option>
                <option value="5">website</option>
                <option value="50">email promotion</option>
                <option value="11">condo guide</option>
                <option value="12">condo life</option>
                <option value="168">the weekly voice</option>
                <option value="185">the weekly asian connections</option>
                <option value="110">epoch times</option>
                <option value="172">chinese real estate weekly (crew)</option>
                <option value="173">city property guide</option>
                <option value="174">lifetime realty weekly</option>
                <option value="175">property weekly</option>
                <option value="176">701 magazine</option>
                <option value="177">realty weekly</option>
                <option value="178">fame weekly</option>
                <option value="94">facebook</option>
                <option value="95">twitter</option>
                <option value="13">friends/relatives</option>
                <option value="133">google search</option>
                <option value="100">realtor</option>
                <option value="14">other</option>
                </select>
                <div name="brokerreferral_field" id="brokerreferral_field" class="BrokerReferralBlock">
                    <div class="BrokerRefer">
                        <input type="text" placeholder="specify brokerage name" name="adv_brokerreferral" id="adv_brokerreferral" value="" class="inputField2" title="broker referral" />
                    </div>
                </div>
                <div name="other_field" id="other_field" class="OtherBlock">
                    <div class="OtherInput">
                        <input type="text" placeholder="please specify" name="adv_other" id="adv_other" value="" class="inputField2" title="please specify" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="smallClear"></div>
        
        <div class="formElement end CommentsOption">
            <div class="formRow input">
                <input type="text" name="message" id="Comments" title="Comments" tabindex="10" placeholder="comments" />
            </div>
        </div>
    
        <div class="smallClear"></div>
    
        <div class="formElement end additionalSpace OptInContainer">
            <div class="formRow fullrow optin">
                <div class="signMeUp label">
                    <p>sign me up!</p>
                </div>
                <div class="control-group">
                    <label class="control control--checkbox realtor_status">
                        <input type="checkbox" name="opt-approve" id="opt-approve" value="1" style="width:20px;" title="opt-approve" />
                        <div class="control__indicator"></div>
                    </label>
                </div>
                <div style="clear:both;"></div>
                <div class="signUpText">
                	yes, i'd like to receive more information about <span style="font-family: 'HelveticaNeueLTStd-Bd';">ivy</span> and other projects from the sher corporation, dream or trend network. you are able to unsubscribe at any time.
				</div>
			</div>
		</div>
        
        
        
        <div class="formElement left securityOption">
            <div class="formRow label">
                <label for="secFcode" <?php if(isset($_GET['captchaError'])){  echo("class=\"error\""); } ?> >complete the security code 
                    <span class="asterisk <?php if(isset($_GET['captchaError'])){ ?>error<?php } ?> ">*</span>
                </label>
                <div class="clear labelgap2"></div>
            </div>
            
            <div class="formRow securityinput">
                <div class="securityInput secImage">
                    <?php dsp_crypt(0,1); ?>
                </div>
                <div class="securityInput secField">
                    <input type="text" id="secFcode" name="secFcode" title="please complete the security field." class="required" minlength="5">
                </div>
            </div>
            
            <div class="formRow errorRow" style="margin-bottom:0px;">    
			<div class="errorOutput">
            	<ul id="errorMsg">
					<?php if(isset($_GET['captchaError'])) { ?>
                    	<li style="line-height:20px;">
                        	there was an error accepting your security code response, please retry.
                        </li>
					<?php } ?>
                </ul>
			</div>
		</div>
        </div>
        
        <div class="smallClear"></div>
    
		<div class="SubmitClear"></div>
        
		<div class="formElement end endSubmit">
            <div class="formRow fullrow submit">
                <input type="hidden" id="cid" name="cid" />
                <input type="hidden" name="PostAction" id="PostAction" value="http://ivy.condos/thankyou" />
                <INPUT type="submit" name="submitBTN" value="submit" border="0" />
            </div>
		</div>
	</div>
	</form>
    
</section>
</div>