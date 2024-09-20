// ignore_for_file: constant_identifier_names
import 'package:firebase_core/firebase_core.dart';

const APP_NAME = 'Pawlly';
const APP_LOGO_URL = '$DOMAIN_URL/img/logo/mini_logo.png';
const DEFAULT_LANGUAGE = 'en';
const GREEK_LANGUAGE = 'el';
const DASHBOARD_AUTO_SLIDER_SECOND = 5;

///Live Url
const DOMAIN_URL = "https://apps.iqonic.design/pawlly";

const BASE_URL = '$DOMAIN_URL/api/';

//Airtel Money Payments
///It Supports ["UGX", "NGN", "TZS", "KES", "RWF", "ZMW", "CFA", "XOF", "XAF", "CDF", "USD", "XAF", "SCR", "MGA", "MWK"]
const airtel_currency_code = "MWK";
const airtel_country_code = "MW";
const AIRTEL_BASE = 'https://openapiuat.airtel.africa/'; //Test Url
// const AIRTEL_BASE = 'https://openapi.airtel.africa/'; // Live Url

//region STRIPE
const STRIPE_URL = 'https://api.stripe.com/v1/payment_intents';
const STRIPE_merchantIdentifier = "merchant.flutter.stripe.test";
const STRIPE_MERCHANT_COUNTRY_CODE = 'IN';
const STRIPE_CURRENCY_CODE = 'INR';
//endregion

const APP_PLAY_STORE_URL = 'https://play.google.com/store/apps/details?id=com.pawlly.customer';
const APP_APPSTORE_URL = 'https://apps.apple.com/in/app/pawlly/id6458044939';

const TERMS_CONDITION_URL = '$DOMAIN_URL/page/terms-conditions';
const PRIVACY_POLICY_URL = '$DOMAIN_URL/page/privacy-policy';
const INQUIRY_SUPPORT_EMAIL = 'demo@gmail.com';

/// You can add help line number here for contact. It's demo number
const HELP_LINE_NUMBER = '+15265897485';

///firebase configs
/// Refer this Step Add Firebase Option Step from the link below
/// https://apps.iqonic.design/documentation/vizion-ai-doc/build/docs/getting-started/app/Configuration/flutter#add-firebaseoptions
const FirebaseOptions firebaseConfig = FirebaseOptions(
  appId: "1:775972566850:android:b14b594feb2250843c5badb",
  apiKey: 'AIzaSyC98CJ9qJtCnZoSh523huAjVA43o4_6tGE',
  projectId: 'pawlly-flutter',
  messagingSenderId: '7759725643850',
  storageBucket: 'pawlly-flutter.appspot.com',
  iosBundleId: 'com.pawlly.user',
);
