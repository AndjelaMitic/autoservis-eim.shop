=== WooCommerce Admin ===
Contributors: automattic
Tags: ecommerce, e-commerce, store, sales, reports, analytics, dashboard, activity, notices, insights, stats, woo commerce, woocommerce
Requires at least: 5.3.0
Tested up to: 5.4.2
Requires PHP: 5.6.20
Stable tag: 1.5.0
License: GPLv3
License URI: https://github.com/woocommerce/woocommerce-admin/blob/main/license.txt

== Description ==

WooCommerce Admin is a new JavaScript-driven interface for managing your store. The plugin includes new and improved reports and a dashboard to monitor key metrics of your site.

**New Reports for WooCommerce**

WooCommerce Admin has a host of new reports that are optimized for speed and have advanced filters that allow you to dive into data about your store:

- Revenue Report
- Orders Report
- Products Report
- Categories Report
- Coupons Report
- Taxes Report
- Downloads Report
- Stock Report
- Customers Report

**Customizable Dashboard**

WooCommerce Admin also allows store owners to customize a new dashboard screen with “performance indicators” that correspond in importance to their store’s operation.

== Getting Started ==

= Minimum Requirements =

* WordPress 5.3
* WooCommerce 3.6.0 or greater
* PHP version 5.6.20 or greater. PHP 7.2 or greater is recommended
* MySQL version 5.0 or greater. MySQL 5.6 or greater is recommended

Visit the [WooCommerce server requirements documentation](https://docs.woocommerce.com/document/server-requirements/) for a detailed list of server requirements.

= Automatic installation =

Automatic installation is the easiest option, as WordPress handles the file transfers and you don't need to leave your web browser. To perform an automatic install:
1. Log in to your WordPress dashboard.
2. Go to: Plugins > Add New.
3. Enter “WooCommerce Admin” in the Search field, and view details about its point release, the rating and description.
4. Select “Install Now” when you’re ready.

= Manual installation =

The manual installation method involves downloading the plugin and uploading it to your web server via your favorite FTP application. The WordPress Codex contains instructions at [Manual Plugin Installation](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Where can I report bugs or contribute to the project? =

Bugs should be reported in the [WooCommerce Admin GitHub repository](https://github.com/woocommerce/woocommerce-admin/).

= This is awesome! Can I contribute? =

Yes, you can! Join our [GitHub repository](https://github.com/woocommerce/woocommerce-admin/)

Release and roadmap notes are available on the [WooCommerce Developers Blog](https://woocommerce.wordpress.com/category/wc-admin/)

== Screenshots ==

1. WooCommerce Admin Dashboard
2. Activity Panels
3. Analytics

== Changelog ==

= 1.5.0 2020-08-07 =
- Dev: New notification: Don't forget to test your checkout. #4805
- Dev: Enable tax calculation before redirecting to standard tax rates page. #4878
- Fix: Use clipRule and fillRule props. #4889, part of #4864
- Fix: Admin order page shipping label prompt compatibility with WCS 1.24. #5025
- Fix: Padding on finish, forward, and back buttons on the welcome modal. #5043
- Fix: Show usage modal when skipping the OBW. #5061
- Fix: Handle user deletion. #4977
- Fix: Jetpack flow for automatic tax calculations. #5101
- Dev: Added event recording to Orders, Stock, and Reviews panels. #4861
- Dev: Added personalization to purchase extension task. #4849
- Dev: Display modal with more info about the new homescreen. #4890
- Dev: Task list - add a shortcut back to store setup. #4853
- Dev: Update the colors of the illustrations in the welcome modal. #4945
- Enhancement: Add eWAY to Payment Setup for AU/NZ Stores. #4947
- Tweak: Remove the Composite products option from the onboarding wizard #4703
- Tweak: Do not show bundled extensions in OBW when a CBD industry has been selected. #5040
- Tweak: Remove industry option for travel. #5065
- Tweak: New marketing copy for the Kliken Google Ads plugin. #5074
- Tweak: Add ToS agreement copy to the WCPay setup task. #5085

= 1.4.0 2020-07-22 =
- Fix: Update returning customer total to include customers whose first order was within the report date range #4430
- Fix: Fix an error in the Analytics/Orders table when there is an order deleted directly from the database #4630
- Fix: Reselecting advanced filters in the customer list #4650
- Fix: Reporting of deleted coupons #4671
- Fix: Preventing refresh after answering a survey note #4711
- Fix: Regular filters not working #4704
- Fix: React warning in test that the key prop wasn't assigned in List #4808
- Fix: Center continue buttons in the onboarding profile wizard #4082
- Fix: Homepage template used in setup checklist customization task #4807
- Fix: Errant Jetpack activation prompt in Stats Overview home screen widget #4817
- Fix: Unable to activate theme with uppercase name #4393 🎉 @ayubadiputra 
- Fix: Set active theme when OBW is shown via the task list #4834
- Enhancement: Add option to dismiss tasks in Setup Checklist #4733
- Enhancement: Show contextual help menu when working on store setup tasks. #4779
- Enhancement: Add automatic PayPal account creation flow. #4804
- Enhancement: Move the WooCommerce > Coupons dashboard menu item to Marketing > Coupons. #4786
- Tweak: Add education and travel to the onboarding industry types #4694
- Tweak: Refactor Jetpack connection flows #4655
- Tweak: Refactor tax task to use promise chain #4683
- Tweak: Add bundle install UI to Business Details step #4695
- Tweak: Include Product Bundles and Product Add-ons as OBW product options #4705
- Tweak: Toggle the “Physical products” checkbox on by default #4702
- Tweak: Variation Names: Allow long names to be shown #4715
- Tweak: Limit inbox status to unactioned notes #4765
- Tweak: Only show usage tracking modal once in OBW. #4766
- Tweak: Add WooCommerce Payments to Setup Checklist. #4793
- Tweak: Update connection flow for Bundle UI #4717
- Tweak: Style improvements for Marketing hub. #4794
- Tweak: Added skip profiler functionality #4721
- Tweak: Reordered home screen tasks #4754
- Tweak: Create single source of truth for task list array #4825
- Tweak: Rework the store details onboarding screen #4771
- Tweak: Design of Product Types step in Onboarding #4707
- Tweak: Add copy that WCS TOS will be accepted upon install #4799
- Dev: Customize webpack jsonpFunction to avoid potential collision with other Webpack bundles #4644 🎉 @aaemnnosttv
- Dev: Update @wordpress/base-styles and replace deprecated variables #4759

= 1.3.2 2020-07-29 =
- Fix: bug preventing saving user preferences on WP 5.3. #4869

= 1.3.1 2020-07-20 =
- Fix: PHP Fatal errors when columns are missing from the Notes table. #4831

= 1.3.0 2020-07-08 =
- Enhancement: Add Jetpack stats to performance indicatorts / homepage #4291
- Enhancement: New "Store Management" quick links card on WooCommerce home screen. #4350
- Enhancement: Inbox notifications layout updates #4218
- Enhancement: New Home Screen #4303
- Enhancement: Use WordPress Core colors for styling accents. #4558
- Dev: Add jest-dom eslint plugin. #4327
- Dev: Migrate onboarding data store to wp.data #4433
- Dev: Remove use of `IconButton` in favor of `Button` #4415
- Dev: Fix error handling for plugins on server error #4462
- Dev: update @wordpress/components and @wordpress/base-styles #4427
- Dev: Migrate user store to wp.data #4505
- Dev: Add options data store to wp.data #4144
- Dev: Runtime feature config override #4523
- Dev: Check that the possibly_add_note function exists before calling it #4680
- Dev: Remove unnecessary rest API init action. #4691
- Dev: Don't include sourcemaps or unminified JS for "core" builds. #4642
- Fix: misaligned 'required' text on selects #4307
- Fix: exception when opening dashboard after selecting extensions to purchase #4357
- Fix: REST API collections schema #4377
- Fix: Monetary Advanced Filters in Customers Report with correct currency object prop. #4356
- Fix: In App purchase "back link" #4301
- Fix: Search results selectable by clicking on item text or icon #4474
- Fix: Filters' static query parameters #4458
- Fix: The WCPay method not appearing as recommended sometimes #4345
- Fix: Removed URLSearchParams method #4501
- Fix: REST API collections schema. #4484
- Fix: null issue in wpNavMenuClassChange #4513 🎉 @gradosevic 
- Fix: RTL stylesheet loading for split code chunks. #4542
- Fix: Don't show store location step in tax and shipping tasks if the address has already been provided #4507
- Fix: Check for enabled methods before payment task completion #4530
- Fix: Solved a problem with the method onChoose in the last onboarding step. #4583
- Fix: Only mark purchase task as complete when products exist #4574
- Fix: Remove unnecessary rest_api_init action that caused incompatibility issues with other plugins. #4691
- Fix: Fix WCPay sometimes not appearing on the task list #4647
- Tweak: make revenue report total sales column optional #4397
- Tweak: Adjustments to WooCommerce Payments setup task #4373
- Tweak: Handling of plugin installs in OBW #4411
- Tweak: Update design of Setup Checklist #4434
- Tweak: Add scrollable styling to left side of Table, and keep updated #4179
- Tweak - Add custom autocompleter support to Search componen #4518
- Tweak: reduce asset filename length. #4535
- Tweak: Use single dash for country/state dropdown options #4553
- Tweak: Use label tag for toggleable shipping zones #4554
- Tweak: Tweak - Make it easier to add submenu items to the Marketing menu #4561
- Tweak: Remove duplicate/redundant inbox note after first order received. #4659
- Tweak: Fix the embed page CSS so the top content sits better #4622


= 1.2.4 2020-06-11 =
- Tweak: reduce asset filename length and remove tilde characters. #4535
- Fix: RTL stylesheet loading for split code chunks. #4542

= 1.2.3 2020-05-22 =
- Tweak: Updates to WooCommerce Payments in Setup Checklist #4293

= 1.2.2 2020-05-18 =
- Fix: Respect tracking opt-in before new page load. #4368
- Enhancement: Add Jetpack connection to plugin benefits step #4374

= 1.2.0 2020-05-18 =
- Enhancement: Add onboarding payments note #4157 
- Enhancement: Marketing Inbox Note #4030
- Performance: Use Route based code splitting to reduce bundle size #4094
- Performance: trim down inbox note API request. #3977
- Fix: Proper display of elements in wc-admin pages when in a RTL environment. #4051
- Fix: Update UX when knowledge base articles fail to retrieve #4133
- Fix: Updated messaging after last step in OBW. #4148
- Fix: Reset profiler when visiting old OBW URL #4166.
- Fix: Dashboard flash before OBW chunk loads #4259
- Tweak: Enable the default homepage template to be filtered #4072 🎉 @stevegrunwell
- Tweak: Create admin note if Jetpack or WooCommerce Services plugin doesn't get installed due to an error during OBW #3888
- Tweak: Update Email Marketing note. #4167
- Tweak: Adjust "demo products" verbiage to "Sample Products" #4184 🎉 @jobthomas
- Tweak: Don't reschedule imports on failed imports #4263
- Tweak: Remove obsolete inbox messages #4182
- Dev: Make query selector for admin alerts more specific #4289 🎉 @pauloiankoski 
- Dev: Guard against null themes in OBW #4244
- Dev: Update wcadmin db version after db callback #4323
- Dev: Only migrate options on version change #4324
- Dev: Use PAGE_ROOT constant to reduce redundant strings #4238 🎉 @codemascot
- Dev: Decouple Plugins DataStore from onboarding feature #4048
- Dev: Move API out of Onboarding #4093
- Dev: Add Profiler Step View Tracks #4141
- Dev: Add React Testing Library #4221
- Dev: Add List and Link components to Storybook #4219
- Dev: Cast Shipping Total to float #4042 🎉 @barryhughes
- Dev: Dynamic Currency with Context API #4027
- Dev: Remove Duplicate array entry #4049 🎉 @tivnet

= 1.1.3 2020-05-18 =
- Tweak: Onboarding: Add Jetpack flow back to onboarding profiler. #4382
- Fix: Respect tracking opt-in before new page load. #4368

= 1.1.2 N/A =
- Version bumped on Composer/Packagist but not released to WordPress.org.

= 1.1.1 2020-05-05 =
- Fix: Storefront should show at top of theme options in onboarding wizard. #4187
- Tweak: Remove Stripe auto-connect from payment task. #4164
- Tweak: Hide suggested extensions in Marketing Tab if opted out of "Marketplace Suggestions"

= 1.1.0 2020-04-23 =
- Tweak: Added link to "go shopping" button #3712
- Fix: Make analytics tables use the site's date format setting #3715
- Fix: Alignment of select text #3723 🎉 @edmundcwm
- Tweak: Add PayFast payment gateway option for sites in South Africa #3738 
- Tweak: Onboarding: Update screen order and remove Jetpack connection in profiler #3739
- Tweak: Onboarding - business step: add more options in the competitors list and other fixes #3812
- Tweak: Onboarding: Redesign plugin benefits screen #3764
- Fix: inconsistent wording downloads report #3844 🎉 @jobthomas
- Tweak: Onboarding: Use full width template for homepage in stores using Storefront #3846
- Tweak: Remove 'add first product' note. #3876
- Enhancement: Improve focus on task list #3796
- Enhancement: Allow individual payment method setup in the onboarding task list #3782
- Tweak: Onboarding: Add toggles to configured payments in task list #3801
- Onboarding: Add offline payment methods #3832
- Fix: Verify Stripe API keys in payment set up step. #3910
- Fix: Connect to WooCommerce.com note disappears before connecting. #3909
- Tweak: Onboarding - payments task: filter payment gateways if the user selects CBD #3745
- Enahncement: Create flat rate or free shipping methods from the onboarding task list #3927
- Fix: Add WooCommerce support if store is using default theme #3908
- Fix: Make WooCommerce breadcrumbs use WooCommerce Branding if it is installed #3798
- Fix undefined variable slug on theme activation error #3942 🎉 2nad@m1992 
- Tweak: Style and icon updates for Activity Panel #3965
- Fix: handle cases where coupon dates are in an unexpected format. #3984
- Enhancement: "Personalize your store" reminder: new inbox notification #3895
- Fix: Onboarding: only validate other platform name for 'other' selling venues #4011
- Performance: only query necessary data in Orders Panel. #3969
- Tweak: Remove icon-button classes from Tag component #3993
- Enhancement: WooCommerce Shipping order page banner prompt #3955
- Performance: speed up indicators endpoint response. #3997
- Enahncement: Add WC Pay to startup checklist
- Enhancement: Marketing Tab
- Enhancement: Add WooCommerce Payments Inbox note #4013
- Fix: Added hook to delete woocommerce_onboarding_homepage_post_id #4015
- Performance: only query requested stat totals in reports. #4009
- Fix: Show admin notices on legacy admin screens. #4019
- Tweak: Reduce the number of default widgets on the dashboard. #4035
- Tweak: Onboarding: Remove plugins step from profiler #3974
- Fix: wc-admin pages work in Internet Explorer 11. #4037
- Dev: Handle orphaned order statuses in analytics settings. #4090
- Tweak: Overwrite button overflow css from Wordpress 5.4 defaults #4108
- Dev: Fix usage of WP_Error in non-global namespaces. #4115
- Tweak: business details step: increase max-height on competitors listbox #4111
- Fix: OBW: Allow CBD only for US stores #4117


= 1.0.3 2020-03-22 =

- Fix: Stop calling protected has_satisfied_dependencies() on outdated plugin. #3938
- Fix: Rename image assets in OBW business details step. #3931
- Fix: Stop using WP Post store for Action Scheduler. #3936

= 1.0.2 2020-03-18 =

- Enhancement: Onboarding: business step: add Google Ads extension install #3725
- Dev: Update prestart script so readme.txt stable tag is updated #3911
- Tweak: create database tables on an earlier hook to avoid conflicts with core WooCommerce. #3896 
- Fix - Made the admin note loading more resilient to prevent failures when loading notes with invalid content_data. #3926

= 1.0.1 2020-03-12 =

- Fix: Add Report Extension Example: Add default props to ReportFilters
- Fix: Product report sorting by SKU when some products don't have SKUs
- Dev: Add Changelog script
- Fix: type warning on install timestamp in PHP 7.4
- Fix: PHP error when WooCommerce core is Network Active on Multisites.
- Fix: missing database table errors on WooCommerce upgrade.
- Fix: undefined const WC_ADMIN_VERSION_NUMBER when WP < 5.3
- Dev: Fix failing tests after WC core merge.
- Dev: Bump WooCommerce tested up to tag

= 1.0.0 2020-03-5 =

- Fix: Customers Report: fix missing report param in search #3778
- Fix: OBW Connect: Fix requesting state #3786
- Fix: OBW: Fix retry plugin install button disappearing #3787
- Fix: Update Country Labeling to Match Core #3790
- Fix: Onboarding: Enable taxes when automatic taxes are setup #3795
- Dev: Onboarding: Remove old development flags #3809
- Fix: Padding on Jetpack notices when activity panel is present. $3418
- Fix: Taxes Report search. #3815
- Fix: Taxes Report search bug and adds initial documentation. #3816
- Fix: Activity Panels: Remove W Panel #3827
- Fix: Tracking on migrated options #3828

= 0.26.1 2020-02-26 =

- Fix: Remove free text Search option when no query exists #3755
- Fix: StoreAlert: Fix typo in API description #3757 👏 @akirk
- Fix: WP Coding Standards PR Regressions #3760
- Fix: OBW: sideloading image test error #3762
- Fix: coding standards violations #3763
- Fix: Product titles include encoded entities #3765
- Fix: Add deactivation hook to Package.php #3770
- Fix: Add active version functions #3772

= 0.26.0 2020-02-21 =

- Fix: Warning in product data store when tax amount is non-numeric. #3656
- Fix: Enable onboarding in production. #3680
- Enhancement: Move Customers report to WooCommerce Menu #3632
- Performance: Remove slow physical products query from non setup checklist pages #3722
- Tweak: use cron instead of Action Scheduler for unsnoozing notes. #3662
- Dev: Add tracks events when profiler steps are completed #3726
- Dev: Ensure continue setup loads the onboarding profiler #3646
- Fix: Added new control in /packages/components/src/select-control/list.js #3700
- Fix: Alignment of select text #3723 👏 @edmundcwm
- Performance: Make Stock Panel indicator more performant. #3729
- Performance: Remove sideloaded images to save on build size #3731
- Fix: Create Onboarding homepage without redirect #3727
- Add: Deactivation note for feature plugin #3687
- Dev: Travis tests on Github for release branch #3751

= 0.25.1 2020-02-07 =

- Dev: Enable onboarding #3651 (Onboarding) 
- Now `decodeEntities` method is used to correct the breadcrumb. #3653 (Activity Panel) 
- Fix: Fix styling of search control in report table header and filters. #3603 (Analytics, Components, Packages) 
🤯

= 0.25.0 2020-01-29 =

- Fix: Onboarding: Mark profiler complete on WC update #3590 (On Merge to WC Core, Onboarding) 
- Dev: fix strict standards in Scheduler classes #3583  
- Task: Avoid redundant/unnecessary cleanup. #3580 (On Merge to WC Core) 
- Fix: Fix styling of search control in report table header and filters. #3603 (Analytics, Components, Packages) 
- Fix: report table search component. #3618 (Analytics, Components, Packages) 
- Performance: Remove unnecessary use of lodash get #3598 (Onboarding) 
- Tweak: don't modify page titles for existing WooCommerce pages. #3585 (On Merge to WC Core) 
- Dev: Handle custom currency formats #3349 (Components, Packages) 
- Fix: Update broken note action hooks #3535 (Activity Panel, Inbox) 
- Dev: Onboarding: Only Show Retry Button on Plugin install failure #3545  
- Dev: SelectControl: Add an option to show all options on refocus #3551 (Components, Packages) 
- Fix: SQL error in category table sort. #3521 (Analytics) 
- Dev: Onboarding: Add option to track appearance completion #3503 (Onboarding) 
- Enhancement: add customer privacy erasure support. #3511 (Analytics) 
- Fix: handle uninstallation when in feature plugin mode. #3546 (On Merge to WC Core) 
- Fix: Exception on dashboard once Onboarding tasks are complete #3513  
- Tweak: Onboarding - Add Skip Step link on Themes Step. #3490 (Onboarding) 
- Bug: Add SelectControl debouncing and keyboard fixes #3507 (Components, Packages) 
- Tweak: Included RegExp for JS files in examples.config.js #3510 (Build, Extensibility) 👏 @yash-webkul
- Bug: Onboarding: Don't show skip link if no plugins exist to skip #3485 (Onboarding) 
- Fix: Make package-based load inert when plugin is active. #3555 (On Merge to WC Core) 
- Dev: Onboarding: Add purchase products task list item #3472 (Onboarding) 
- Fix: Properly style theme selection button in Site Profiler #3489  
- Dev: Onboarding: Add tracks to extension purchase task and modal #3493 (Onboarding) 
- Tweak: Change Refunds to Returns on the dashboard. #3514  
- Dev: Update translation scripts and instructions for creating `.json` files. #3433 (Build) 
- Bug: Onboarding: Add in tracks for failed plugin installation #3483 (Onboarding) 
- Dev: Onboarding: Add theme install and activation endpoints #3482 (Onboarding, REST API) 
- Fix: component styles for WordPress 5.3. #3357 (Build, Components, Design, Packages) 
- Dev: Onboarding: Add another option to platforms. #3471 (Onboarding) 
- Fix: `CompareFilter` functionality regression. #3421 (Analytics, Components, Packages) 
- Fix: don't run database migrations on new installs. #3473  
- Fix: WC-Admin header on settings and status pages. #3389 (Activity Panel) 
- Enhancement: allow filtering of hidden WP notices. #3391 (Activity Panel, Extensibility) 
- Fix: show pending product reviews when comment moderation is disabled. #3459 (Activity Panel) 
- Dev: AssetDataRegistry: update SQL example #3418  
- Tweak: Scroll to notices when displayed while the notice area is scrolled out of view. #3390 (Activity Panel) 
- Dev: DataStores: normalize contexts to plural #3419  
- Enhancement: allow report cache layer to be turned off. #3434  
- Bug: Fix user data fields filter name. #3428 (Dashboard) 
- Fix: error when trying to download report data. #3429 (Analytics) 
- Dev: Update to latest PHPUnit 7 #3571 (Build) 
- Fix: invalidate Reports cache when changing Analytics settings. #3465 (Analytics, REST API, Settings) 
- Bug: Onboarding: Skip Shipping connect step if Jetpack is already connected #3486 (Onboarding) 
- Fix: Time zone offset calculation on customer last active date. #3388 (Analytics) 
- Dev: Default the Calypso environment to production #3347 (Onboarding) 
- Bug: Onboarding: Update shipping task button text #3400 (Onboarding) 
- Bug: Onboarding: Update check for TOS accepted in tax step #3245 (Onboarding) 
- Fix: remove the header when user doesn't have required permissions #3386 (Activity Panel) 
- Dev: Add autocomplete props to address fields in onboarding and adjust country/state matching #3338 (Onboarding) 
- Dev: Add purchase modal at the end of the profile wizard #3444 (Onboarding) 
- Dev: Standardize hook and filter prefixes. #3339 (On Merge to WC Core) 
- Fix: make report filter date props optional #3359 (Components, Extensibility, Packages) 
- Tweak: Add/disable plugin filter #3361  
- Dev: Onboarding -  Add button to continue setup after importing products #3402 (Build, Onboarding)

= 0.24.0 2020-01-06 =

- Bug: Add SelectControl debouncing and keyboard fixes #3507 (Components, Packages)
- Fix: Properly style theme selection button in Site Profiler #3489
- Dev: Update translation scripts and instructions for creating `.json` files. #3433 (Build)
- Dev: Add initial documentation for the historical data import. #3506 (Documentation)
- Dev: Onboarding: Add purchase products task list item #3472 (Onboarding)
- Dev: Onboarding: Add another option to platforms. #3471 (Onboarding)
- Dev: Add singular/plural distinction to onboarding plugins installation #3517 (Onboarding)
- Dev: Onboarding: Add theme install and activation endpoints #3482 (Onboarding, REST API)
- Tweak: Onboarding - Add Skip Step link on Themes Step. #3490 (Onboarding)
- Bug: Onboarding: Skip Shipping connect step if Jetpack is already connected #3486 (Onboarding)
- Bug: CI: use PR repo instead of main repo when checking out branches. #3512 (Build)
- Tweak: Included RegExp for JS files in examples.config.js #3510 (Build, Extensibility) 👏 @yash-webkul
- Dev: Onboarding: Add tracks to extension purchase task and modal #3493 (Onboarding)
- Tweak: Change Refunds to Returns on the dashboard. #3514
- Fix: invalidate Reports cache when changing Analytics settings. #3465 (Analytics, REST API, Settings)
- Dev: DataStores: normalize contexts to plural #3419
- Dev: AssetDataRegistry: update SQL example #3418
- Fix: show pending product reviews when comment moderation is disabled. #3459 (Activity Panel)
- Enhancement: allow report cache layer to be turned off. #3434
- Tweak: Scroll to notices when displayed while the notice area is scrolled out of view. #3390 (Activity Panel)
- Dev: Add autocomplete props to address fields in onboarding and adjust country/state matching #3338 (Onboarding)
- Dev: Update instructions for documenting new components. #3443 (Components, Documentation)
- Dev: Add purchase modal at the end of the profile wizard #3444 (Onboarding)
- Fix: component styles for WordPress 5.3. #3357 (Build, Components, Design, Packages)
- Bug: Onboarding: Don't show skip link if no plugins exist to skip #3485 (Onboarding)
- Bug: Onboarding: Add in tracks for failed plugin installation #3483 (Onboarding)
- Dev: Fix the "is this card useful" prompt display #3427 (Onboarding)
- Tweak: Add/disable plugin filter #3361
- Bug: Onboarding: Update shipping task button text #3400 (Onboarding)
- Dev: Default the Calypso environment to production #3347 (Onboarding)
- Dev: Standardize hook and filter prefixes. #3339 (On Merge to WC Core)
- Fix: WC-Admin header on settings and status pages. #3389 (Activity Panel)
- Dev: Fix revenue question translation with currency conversion #3358 (Onboarding, Packages)
- Fix: make report filter date props optional #3359 (Components, Extensibility, Packages)
- Dev: Onboarding -  Add button to continue setup after importing products #3402 (Build, Onboarding)
- Bug: Onboarding: Update check for TOS accepted in tax step #3245 (Onboarding)

= 0.23.3 2019-12-26 =

- Fix: don't run database migrations on new installs. #3473

= 0.23.2 2019-12-19 =

- Enhancement: allow filtering of hidden WP notices. #3391 (Activity Panel, Extensibility)
- Fix: error when trying to download report data. #3429 (Analytics)
- Bug: Fix user data fields filter name. #3428 (Dashboard)
- Fix: `CompareFilter` functionality regression. #3421 (Analytics, Components, Packages)
- Fix: Time zone offset calculation on customer last active date. #3388 (Analytics)
- Fix: remove the header when user doesn't have required permissions #3386 (Activity Panel)

= 0.23.1 2019-12-08 =

- Fix: undefined function error.

= 0.23.0 2019-12-06 =

- Dev: Add currency extension #3328 (Packages)
- Fix: errant moment locale data loading. #3362 (Components, Packages)
- Dev: Packages: Prep for release. #3325 (Build, Components, Packages)
- Bug: Settings: Persist date range selection #3293
- Dev: Remove Newspack dependency. #3302
- Dev: DB Updates: invalidate cache after update #3299
- Fix: beginning of next day calculation on daylight saving time on the days the time changes. #3333 (Analytics)
- Tweak: Add a filter that allows disabling WooCommerce Admin. #3350 (On Merge to WC Core)
- Fix: Retrieve week last year data by calendar date instead of week alignment. #3271 (Analytics, Packages)
- Bug: Check if extended_info is set for order report items #3315 (REST API)
- Tweak: remove global settings dependency from Navigation package. #3294 (Components, Packages)
- Fix: Fix checkout of main branch in CI environment. #3296 (Build)
- Fix: decouple Date package from global wcSettings object. #3278 (Components, Packages)
- Fix: Make the order count between customer and table total consistent. #3290 (Analytics)
- Fix: decouple Currency and Number packages from global wcSettings object. #3277 (Components, Packages)
- Bug: Filter invalid statuses from saved statuses #3268
- Dev: use a filter to set default locale #3273
- Dev: Allow core inclusion via Package.php #3196 (Build)
- Dev: Fix filter gap on analytics select controls #3259 (Components, Packages)
- Bug: Correcting and clarifying analytics terms and calculations #3104 (Analytics, Components, Packages)
- Dev: rename data store get_* to add_* functions where function does not return values #3275
- Tweak: Search component: remove dependency on settings global from countries autocompleter. #3262 (Components, Packages)
- Dev: PHPCS fixes for onboarding files #3269 (Documentation)
- Dev: Add a tracks queue to delay event recording & log embed page views #3250
- Dev: Make WooCommerce brand localizable #3247
- Fix: Add single customer REST API end point. #3174 (REST API)
- Dev: fix typos in JS docs #3248
- Bug: Select control: fix misalignment and hide scroll bar #3215 (Components, Packages)
- Dev: capitalize WooCommerce Services #3249

= 0.22.0 2019-11-13 =

- Fix: Incorrect calculation of tax summary on Taxes screen. #3158 (Analytics)
- Fix: Correct product and coupon count on edited orders. #3103 (Analytics)
- Bug: Update filter picker to use key instead of id #3214 (Analytics, Components, Packages)
- Enhancement: prompt stores to add their first product(s). #3119 (Inbox)
- Dev: Move Analytics REST endpoints to `wc-analytics` namespace. #3204 (Components, Packages)
- Tweak: add usage tracking inbox notice. #3112 (Activity Panel, Inbox)
- Task: Fix PHP linter errors. #3188
- Enhancement: Add query filters to data stores.
- Dev: Refactor data store classes. #2961 (REST API)
- Dev: WooCommerce Admin has been marked as compatible with WooCommerce 3.8.0. #3201
- Bug: Fix ellipsis menu style #3141 (Analytics, Components, Packages)
- Tweak: Field misalignment in product edit screen. #3145
- Dev: update tested to version for WC and WP #3162
- none needed. #3138 (Documentation)

= 0.21.0 2019-10-30 =

- Fix: report export format when generated server-side. #2987 (Analytics, Packages)
- Tweak: automatically update DB version during plugin updates. #3113
- Tweak: add visual feedback for Inbox Note Actions #3039 (Activity Panel, Build, Inbox)
- Fix: Address discrepancies in Revenue totals between Analytics screens. #3095 (Analytics)
- Tweak: track inbox note views. #3096 (Activity Panel, Build, Inbox)
- Dev: Fix asset image URL and business extension images #3062
- Dev: Fix broken plugin builds by adding missing feature flag check #3053 (Build)
- Enhancement: add management link to Reviews panel. #3011 (Activity Panel)
- Fix: Error in category comparison chart. #3027 (Analytics, REST API)
- Dev: Add the ability to create custom plugin builds #3044 (Build)
- Fix: create table error during import. #3022 (Analytics, Build)
- Tweak: Moved WC-Admin specific actions from TableCard to ReportTable. #2900 (Build, Components, Packages)

= 0.20.1 2019-09-24 =

- Fix: use category lookup id instead of term taxonomy id (#3027)
- Fix: Update order stats table status index length. (#3022)

= 0.20.0 2019-09-24 =

- Dev: Fix issue #2992 (order number in orders panel) #2994
- Dev: Replace lodash isNaN() with native Number.isNaN() #2998 (Build, Packages)
- Enhancement: add option to email a download link when exporting reports. #2899 (Analytics, REST API)
- Dev: Ignore filename rules for PSR-4 classes. #2967 (Build)
- Fix: Catch notices that are hooked earlier than priority 10. #2981
- Dev: Category Lookup Table - Fix Category Segments #2253
- Performance: add caching layer to analytics. #2970 (Analytics)
- Dev: Replace lodash isFinite() with native Number.isFinite() #2977 (Build, Components, Packages)
- Bug: Fix conflict with Blocks 2.4 #2846
- Dev: Add filter to notes datastore where clauses. #2819
- Dev: Copy component READMEs to docs folder before GH page deploy. #2952 (Build)
- Dev: Add GitHub pages deploy step to Travis config. #2940 (Build, Documentation)
- Dev: Fix plugin installation when working from a push instead of a pull request. #2950 (Build)
- Dev: Fix pull request branch detection on CI (try #2) #2944 (Build)
- Dev: Only build pushes to main branch. #2941 (Build)
- Performance: reduce JS bundle size. #2933 (Build)
- Dev: Fix pull request branch detection on CI #2942 (Build)
- Dev: refresh component documentation #2872 (Build, Components, Documentation, Packages)
- Dev: Simplified intervals_missing method of DataStore class #2920 👏 @codemascot
- Dev: Simplified intervals_missing method of TimeInterval class #2920 👏 @codemascot

= 0.19.0 2019-09-24 =

- Dev: Use upstream webpack-rtl-plugin #2870 (Build)
- Dev: Fix variable name typo #2922
- Fix: persist date_last_active for customer reports #2881 (Analytics) 👏 @cojennin
- Tweak: consistent naming for report columns. #2845 (Design)
- Tweak: schedule customer lookup table updates instead of running during checkout. #2832
- Tweak: have Import note action scroll to import section of settings screen. #2799 (Activity Panel, Components, Inbox, Packages)
- Bug: Fix chart type buttons misalignment #2871 (Components, Packages)
- Updated to color-studio v2 and refreshed the color scheme #2837 (Build, Components, Packages)
- Tweak: change report charts filter name. #2843 (Components, Documentation, Packages)
- Dev: Update no data message in table #2854 (Components, Packages)

= 0.18.0 2019-08-28 =

- Fix: Product in dropdown clickable in FF/Safari #2839 (Components, Packages) 👏 @cojennin
- Fix: gross order total calculation. #2817 (Analytics)
- Fix: Date calculation on notes being double adjusted to UTC. #2818 (Inbox)
- Bug: Orders report now shows coupons in Coupon(s) column #2812 (Analytics) 👏 @cojennin
- Fix: Bug navigating from DevDoc component pages to WP dashboard pages. #2827 (Documentation)
- Enhancement: add Facebook extension inbox note. #2798 (Activity Panel, Inbox)
- Enhancement: handle simple to variable product changes in reports. #2814 (Analytics)
- Dev: Release Scripts: Update to reflect refactor #2796 (Build)
- Fix: Import all used Gutenberg component styles. #2679
- Fix: report column visibility preference bug. #2806 (Analytics, Components, Packages, Settings)
- Dev: Components: prepare changelogs for release #2802 (Build, Components, Packages)
- Fix: remove date picker from Customers Report. #2805 (Analytics)
- Tweak: add empty dataset treatment for report tables. #2801 (Analytics, Components, Packages)
- Dev: Search List Control: fix long count values cut-off in IE11 #2783 (Components, Packages)
- Dev: Update List actionable items to be wrapped with Link #2779 (Components, Packages)

= 0.17.0 2019-08-15 =

- Fix: chart data fetch/render over long time periods #2785 (Analytics)
- Task: update the class filename exclusion to /src/ for PSR-4 #2794
- Tweak: Increase zIndex on popover elements. #2777
- Fix: chart display when comparing categories. #2710 (Analytics)
- Fix: Allow WooCommerce Admin to be deleted through the plugin screen when WooCommerce is not active. #2762
- Fix: Charts being partially rendered on long time periods. #2776 (Analytics)
- Task: update WC tested to version to 3.7.0 #2782
- Fix: Customer last active date showing `Invalid date`. #2764 (Analytics)
- Task: Update report endpoints to be PSR-4 autoloaded  #2755 (Build)
- Bug: Fix daily cron event (PSR-4) #2754 (Build)
- Fix: issue where product category update button was not always clickable #2753
- Fix: Add version parameter to `_doing_it_wrong` on `current_screen`. #2733
- Task: Update feature classes to be PSR-4 autoloaded. #2736 (Build)
- Fix: Short circuit admin title filter when applied by third parties too early. #2744
- Fix: chart display when comparing categories. #2708 (Analytics)
- Bug: Only apply current submenu CSS reset on non-embed pages. #2687
- Dev: Add `wc_admin_get_feature_config` filter to feature config array. #2689

= 0.16.0 2019-07-24 =

- Tweak: Change verbiage of feedback notification. #2677
- Dev: Update unit tests to work with PHPUnit 7+. #2678
- Fix: Bug that was preventing confirmation dialog from showing after saving settings. #2660
- Fix: completed orders lingering in activity panel. #2659 (Activity Panel, REST API)
- Dev: Webpack: Use wp.url instead of bundling package #2663 (Build)
- Fix: Location of unread indicators in activity panel. #2662
- Bug: Fix missing nav on connected admin pages. #2676
- Task: Add priority 2 Tracks events #2633 (Components, Packages)
- Dev: Replace 'stringifyQuery' with 'addQueryArgs' #2655 (Build, Components, Packages)
- Task: Add priority 3 Tracks events #2638 (Components, Packages)
- Fix: Z-index issue in empty message on chart #2646 (Components, Packages)
- Dev: Tests setup: bring in Woo Core dependencies #2640 (Build)
- Fix: Disable placeholder animation when prefers-reduced-motion is set #2645 (Accessibility)
- Task: Add instructions for translating to contributing docs. #2618 (Documentation)
- Dev: show example extension list as list in readme #2619 (Documentation)
- Fix: react-spring breaking IE11 #2698 (Build)

= 0.15.0 2019-07-11 =

- Fix: Compare checkboxes in report tables #2571
- Dev: Introduce a new Products by Tag(s) block #554
- Dev: Tracks: Fix Link onclick #2594 (Components, Packages)
- Fix: Use correct links in DevDocs. #2602 (Documentation)
- Fix: Prevent error when no actionable order statuses are set #2577
- Fix: exclude old WC auto-draft orders from import #2612 (Analytics)
- Dev: Fix: propType validation warnings on embedded pages #2607
- Fix: Only calculate one order row when the order has multiple coupons. #2484 (Analytics)
- Fix: Cast is_snoozable as int prior to database save #2573
- Performance: check for scheduled snooze action once per hour instead of every admin request. #2593
- Fix: Update layout of Settings Page and notify users when settings are not saved. #2544
- Dev: Update color-studio to 1.0.5 #2575 (Build, Packages)
- Task: Add tracks event to Store Alert and Inbox Notification action clicks #2559
- Fix: Change size of Header to 56px - fixes bug in product edit page toolbar being hidden.
- Dev: Add countLabel prop to SearchListItem #2569 (Components, Packages)
- Task: Send tracks event for snoozing store alerts. #2560
- Fix: Stock notifs: fix low_stock_amount for variations #2546
- Enhancement: Add Report CSV Export Endpoint #2526 (Analytics, REST API)
- Tweak: remove placeholder link. #2561
- Fix: WordPress Notifications Activity Panel falsely saying there are notices to be seen. #2552
- Dev: Route handling: Remove hash in favor of path parameter #2444 (Components, Packages)
- Dev: Customizable dashboard: handle turned off feature flag #2548
- Dev: Dashboard: Add Tracks events #2550 (Dashboard)
- Task: Tracks: Add chart and table events #2557
- Fix: Fixes issue with alerts on mobile #2537
- Bug: Fix batch queue range bug. #2521
- Dev: Advanced Filters: Add Tracks events #2525 (Components, Packages)
- Tweak: Open external note action links in a new tab #2462 (Activity Panel, Inbox)
- Tweak: fix some report endpoint default params. #2496 (REST API)
- Enhancement: Remove updated stock products from Activity Panel #2442 (Activity Panel)
- Fix: Track name for activity panel open event #2532
- Enhancement: Add Reports CSV Exporter Class #2502 (Analytics)
- Fix: margins on non-update notices. #2487  👏 @benignant
- Enhancement: add state/region to Customers Report. #2463 (Analytics) 👏 @KZeni

= 0.14.0 2019-06-24 =

- Dev: Action Scheduler: fix potential endless sync #2425
- Dev: Fix Activity Panel being overlapped by editor toolbar #2446 (Activity Panel)
- Bug: add match=any support for advanced orders table filter #2228
- Dev: update tested to version in plugin repo readme.txt #2443
- Fix: PHP errors on missing refund orders during import. #2464 (Analytics)
- Dev: Allow keyboard interaction in Stock Activity Panel form #2447 (Accessibility, Activity Panel)
- Dev: Activity Panels: Add track event when panels are opened. #2498 (Build)
- Dev: Add wp-api-fetch script to dependencies #2460
- Dev: Remove the "wpClosedMenu" page setting #2441 (Build)
- Enhancement: Report Tables: Add example extension #2440 (Build, Components, Extensibility, Packages)
- Fix: fix type in readme changelog for 0.13.0 #2457 (Documentation)
- Tweak: Add test to catch missing version updates. #2424 (Build)
- Dev: Fix revenue and orders charts using the wrong endpoint in the Dashboard #2417 (Dashboard)
- Fix: handle internal `rest_do_request()` error conditions. #2423 (Dashboard)
- Dev: Fix conflicts with WordPress.com toolbar #2431 (Activity Panel)
- Task: Remove test menu from Orders panel #2438 (Activity Panel)
- Dev: Table queries: remove befor/after from no interval endpoints #2422
- Tweak: Reduce style dependencies on WP core, avoid errantly including WP core's Google Fonts. #2432 (Components)
- Dev: Update Dashboard Charts naming and order #2429 (Dashboard)
- Bug: Fix search bar in Orders page not being tapable on mobile #2384

= 0.13.2 2019-06-13 =

- Fix: Bump plugin version for database update.

= 0.13.1 2019-06-12 =

- Fix: Exit deactivate early if WooCommerce not active. #2410

= 0.13.0 2019-06-12 =

- Fix: Notes: update sales record link #2397
- Enhancement: Settings: Add default date settings #2292 (Components, Dashboard, Packages)
- Dev: Add tracks to import jobs #2193
- Dev: Notes: Add filters to disable milestone and sales record notes. #2227
- Enhancement: Trigger an action server side when admin note actions are clicked #2325
- Dev: Fix Activity Panel layout on mobile #2405 (Activity Panel)
- Dev: Add uninstall file to release ZIP #2402 (Build)
- Bug: Fix wrong average numbers in chart legends #2352 (Analytics, Components, Packages)
- Dev: Add date_created_gmt property to orders endpoint #2086 (Activity Panel)
- Enhancement: Add progress bars to Historical Data Import screen #2312
- Bug: Fix some data not to being imported when 'skip_existing' option is enabled #2385
- Fix: Double space at 191 row #2369  👏 @shoheitanaka
- Enhancement: Only show unactioned notes in the Inbox panel. #2327 (Inbox)
- Bug: Don't create Notices tab in Activity Panel if notices HTML element was removed by a plugin #2378
- Tweak: Allow paragraph tags in admin notes. #2344 (Inbox)
- Tweak: Allow note action URLs to be empty. #2324 (Inbox)
- Bug: Prevent inactive tabs from making requests #2377
- Task: Remove second beta warning from readme #2362
- Fix: Misspelling at update config.js #2368  👏 @shoheitanaka
- Dev: Transpile newspack-components package #2348 (Build)
- Dev: Low stock handling inconsistencies with WooCommerce 3.6+ #2191
- Dev: Remove d3-array dependency #2286 (Build)
- Dev: Dashboard Extentions: Add a section #2280 (Build, Components, Extensibility, Packages)
- Fix: Move StoreAlerts below screen meta links on embed pages. #2291
- Fix: Extensions: fix registering a page #2301 (Extensibility)
- Dev: Fix `box-shadow-8dp` error. #2290 (Components, Packages)
- Fix: Dashboard Extension Example: Make namespace unique #2302 (Extensibility)
- Dev: Persisted Queries: Avoid adding to non time related screens #2225 (Build)
- Dev: Remove customizable dashboard heading #2321 (Dashboard)
- Bug: Add missing space in Orders Activity Panel card #2306 (Activity Panel)
- Task: Remove beta warning from readme. #2340
- Dev: Dashboard: Extend charts data #2258 (Dashboard, Extensibility)
- Bug: Handle `WC_Admin_Notices`. #2245 (Activity Panel, On Merge to WC Core)
- Bug: Exclude auto-draft and trashed orders from imports. #2265
- Fix: wc-api: Remove reference to import update functions #2277 (Dashboard)
- Enhancement: Add support for “primary” admin notice actions. #2269
- Enhancement: Allow links in admin notice content. #2272
- Fix: Remove errant import update operation from `wp-api` spec. #2271
- Dev: Hook up import/totals endpoint to Historical Data Import screen #2208
- Fix: Refactor main file into singleton class structure #2226

= 0.12.0 2019-05-14 =

- Fix: dashboard issues #2194
- Fix: Dashboard: re-arrange section dropdown order #2216
- Fix: Refactor page handler API #2209
- Fix: EllipsisMenu misalignment in wide containers #2207
- Dev: Handle “all guests” when getting customers from orders. #2038
- Dev: Order milestones: prevent order count queries from being issues on every request. #2224
- Dev: Replace Rebuild reports settings with Import Historical Data #2198
- Dev: add a defaultValue parameter to the ReportFilters component #2150 👏 @rrennick
- Dev: Record refunds separate from order entries #2083
- Dev: Add refund filtering to order reports #2179
- Dev: Hook up API Historical Data screen to API endpoints #2177
- Fix: Show Y grid ticks/lines in charts where all values are lower than 1 #2147
- Fix: Dashboard: Rename class/feature to remove conflict with legacy dashboard widget #2138
- Fix: add defaultOrder field to tablecard header #2139 👏 @rrennick
- Fix: Travis: Exit scripts with error when one occurs #2184
- Dev: Save section/block preferences in user data #2148
- Fix: Vertically center Dashboard 'Add more' button #2171
- Fix: Don't make an API call when there are no performance indicators #2157
- Dev: Add Historical Data Import Screen #2073
- Fix: Fix customer type filter param in orders report #2169
- Dev: EllipsisMenu: Refactor children to renderContent #2154
- Dev: Dashboard: Section add, remove, move up, and move down #2134
- Fix: Persist chart interval in Dashboard #2156
- Dev: Allow renaming Dashboard sections #2131
- Dev: Add import endpoint and controller #2034
- Fix: Prevent chart type buttons breaking in two lines #2135
- Dev: Support Sequential Order Numbers in Downloads Report order number filter #1907
- Dev: Scroll to top of the table when navigating table pages #2051
- Dev: Add empty state for the Reviews panels #2124

= 0.11.0 2019-04-17 =

- Dev: Extend report submenu items #2033
- Dev: Extension Examples #2018
- Dev: Update admin notes readme #2043
- Dev: Add profile wizard base page #1933
- Dev: Method to publish core ready features #1863
- Dev: Add PHP autofix to pre-commit hook #2022
- Dev: PHP Lint fixes #2023
- Dev: Update Link in readme to Proper Location #2026
- Dev: Split D3Chart utils/axis file #2000
- Dev: Remove coupon_total from order stats table #1975
- Fix: Transpile acorn-jsx package #2064
- Fix: Inbox: Giving Feedback Notice #2019 👏 @Mr-AjayM
- Fix: Check if welcome message notice exists before creating it #2063
- Fix: Respect manual offsets in default before/after params #2035
- Fix: Fix wrong dates in Reviews and Orders panels of the Activity Panel #2013
- Fix: Make customer name extendable #1976
- Fix: center mobile icon vertically #1990 👏 @rrennick
- Fix: search filter focus #1994
- Fix: Fix date filter layout on Android #1996
- Fix: Order Status filter: <select> is not vertically aligned #1971 👏 @dinhtungdu
- Fix: add filter length condition to enable filter check #1983 👏 @rrennick
- Fix: lookup product title in order meta if product has been deleted #1977 👏 @rrennick
- Fix: Cast order totals as floats when calculating net total #1945
- Enhancement: Add empty state in Stock panel #2049
- Enhancement: Add empty state in Orders panel #2037
- Enhancement: Hook up Stock panel #1998
- Enhancement: Add order milestone notifications. #1872
- Enhancement: Add leaderboard controller and endpoint #1995
- Enhancement: Hook up leaderboards endpoint to dashboard #2004
- Enhancement: Activity Panel: Add a mobile app note #2008
- Enhancement: Scroll to top only when URL changes #1989
- Enhancement: Allow negative values in charts #1979

= 0.10.0 2019-04-02 =

- Dev: Properly namespaced methods in wc-admin.php. props @ronakganatra9 #1804
- Dev: Changed text-domain to `woocommerce-admin` #1795
- Dev: Updates to plugin header #1764
- Dev: Clear scheduled actions on plugin deactivate #1715
- Dev: Refactor getFilterQuery #1873
- Dev: Update npm dependencies #1913
- Fix: ESLint error in leaderboards #1914
- Fix: REST API Requests failing with isUnboundedRequest #1954
- Fix: Bugs in Reviews panel #1947
- Fix: Scroll to top of page when changing reports #1958
- Fix: Update variations controller filter names #1949
- Fix: Sku sorting in variations report #1952 #1801 props @ronakganatra9
- Fix: REST API customers exact match filters
- Fix: EmptyContent on narrow viewports #1703
- Fix: Empty chart and summary numbers in Categories Report #1698
- Fix: Display chart and summary numbers placeholders when loading search terms #1694
- Fix: Display order number on reports #1706
- Fix: Missing Date Picker Calendar in RTL #1810
- Fix: Circles on chart hover #1816
- Fix: Date Range dropdown for RTL locales #1803
- Fix: Sorting by tax_code in Taxes Report #1811
- Fix: Charts in RTL locales #1794
- Fix: RTL css #1781
- Fix: CSS Lint issues in store-alerts #1793
- Fix: Products stats segmentation when filtering categories #1779
- Fix: Remove timezone from appendTimestamp() output #1778
- Fix: REST API Make variations and coupons endpoints return zero-value items #1765
- Fix: REST API make categories return zero-value items #1755
- Fix: REST API Make products and rates endpoints return zero-value items #1722
- Fix: Taxes report, sort taxes numerically #1766
- Fix: Chart comparison mode single category #1762
- Fix: Simplify options in filters #1748
- Fix: Show compared keys in chart legends even if their values are 0 #1754
- Fix: IE11 Leaderboard issue
- Fix: Use IDs instead of labels to identify chart legend items #1730
- Fix: Update table columns visibility when loading finishes #1729
- Fix: Update chart colors #1731
- Fix: Date Picker css tabs #1717
- Fix: Infinite loop in customer population #1936
- Fix: PHP notices on orders data store #1870
- Fix: Table links to internal reports #1824
- Accessibility: Add button focus style to report chart interval selector #1740
- Enhancement: Add "Cancel All" method to ActionScheduler Store #1813
- Enhancement: Add store notice for processing historical data #1763
- Enhancement: Ensure other scheduled actions are claimed before WC Admin actions #1759
- Enhancement: Load on hold reviews in the Activity Panel: #1871
- Enhancement: Add overlay to Product Placeholder image #1880
- Enhancement: Added "Remind me later" ability to StoreAlert component #1848
- Enhancement: Set reviews Activity Panel unread indicator based off REST API data #1824
- Enhancement: Set orders Activity Panel unread indicator based off REST API data #1860
- Enhancement: Hide Reviews Activity Panel if reviews are disabled #1852
- Enhancement: Lookup product title in order meta if product has been deleted #1977
- Performance: Avoid un-needed chart re-renders #1780
- Performance: Don't run lookup table historical population on activation of plugin #1741
- Performance: Don't dispatch REST API requests when window/tab is hidden #1732
- Performance: Only check for unsnooze note on admin_init #1960

= 0.8.0 - 2019-02-28 =

- Table Component: Reset search on compare
- MenuItem Component: Added isCheckBox prop
- a11y: Enhancements to “Rows per Table” on the dashboard
- Taxes Report: Fix comparison mode and segmentation labels
- Fix css linter errors
- Test Framework: Require WordPress 5.0 or greater to run phpunit
- Table Component: Fix search positioning in small viewports
- Chart Component: Preserve chart colors bug fix
- Navigation: Close wp-admin menu when navigating between reports in narrow viewports
- Analytics: Don’t show variation table when in an active search
- Dashboard: Fix for style of summary number placeholders
- Downloads/Customers Report: Fix for filters
- Product Variation name format now matches Woo core
- phpcs fixes in unit tests
- Chart: Mouse pointer now displayed in entire clickable area
- Analytics: Sort tabular data when selecting a Summary Number
- Chart: Fixes for the legend totals
- Build: Move IE11 css to specific css file
- Downloads Report: Fix for sorting bug
- Stock Report: fix the product link
- Chart: Refactor of d3 logic
- Autocompleter: Increase debounce time to reduce API requests
- Segmented Selection Component: fix for missing borders
- Chart: Add messaging when no data is available for selected filters
- Setup: Improvements to install flow
