// ignore_for_file: constant_identifier_names

import 'package:firebase_core/firebase_core.dart';


const APP_NAME = 'Pawlly Employee';
const DEFAULT_LANGUAGE = 'en';

///Live Url
const DOMAIN_URL = "https://apps.iqonic.design/pawlly ";


const BASE_URL = '$DOMAIN_URL/api/';

const APP_PLAY_STORE_URL = '';
const APP_APPSTORE_URL = '';

const TERMS_CONDITION_URL = '$DOMAIN_URL/page/terms-conditions';
const PRIVACY_POLICY_URL = '$DOMAIN_URL/page/privacy-policy';
const INQUIRY_SUPPORT_EMAIL = 'demo@gmail.com';
const DASHBOARD_AUTO_SLIDER_SECOND = 5;

/// You can add help line number here for contact. It's demo number
const HELP_LINE_NUMBER = '+15265897485';

///firebase configs
/// Refer this Step Add Firebase Option Step from the link below
/// https://apps.iqonic.design/documentation/vizion-ai-doc/build/docs/getting-started/app/Configuration/flutter#add-firebaseoptions
const FirebaseOptions firebaseConfig = FirebaseOptions(
  appId: "1:775972566850:android:b14b594feb22508d43badb",
  apiKey: 'AIzaSyC98CJ9qJtCnZoSh523huAjVAYS43_6tGE',
  projectId: 'pawlly-flutter',
  messagingSenderId: '775972435850',
  storageBucket: 'pawlly-flutter.appspot.com',
  iosBundleId: 'com.pawlly.employee',
);
