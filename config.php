<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('input/function.php');


$meta_title  = 'Sports TV';
$meta_description  = 'Watch live sports instantly for FREE. Stream NFL or NCAA football on CBS, ESPN, FOX, NBC or your other favorite sports channels wherever you go. All the biggest games & your hometown teams in one place.';
$meta_keyword  = 'live,sport,sports,live sports,live sports tv,live score,live sports schedule,sports tv,live tv sports,live sports tv free,live soccer,live nba,live ncaaf,live ncaam';
$id_histats    = ''; // id histats
$url_web  = 'https://'.$_SERVER['HTTP_HOST'];

$affliasi    = 'https://www.facebook.com'; //Ganti https://www.facebook.com dengan Link Offer kamu

 // OFFER SPORTS 
$offer_baseball  = 'https://www.facebook.com';
$offer_boxing  = 'https://www.facebook.com';
$offer_bundesliga  = 'https://www.facebook.com';
$offer_champions_league  = 'https://www.facebook.com';
$offer_copa_america  = 'https://www.facebook.com';
$offer_eredivisie  = 'https://www.facebook.com';
$offer_euro  = 'https://www.facebook.com';
$offer_europa_league  = 'https://www.facebook.com';
$offer_football  = 'https://www.facebook.com';
$offer_formula  = 'https://www.facebook.com';
$offer_gaa = 'https://www.facebook.com';
$offer_international  = 'https://www.facebook.com';
$offer_la_liga  = 'https://www.facebook.com';
$offer_ligue  = 'https://www.facebook.com';
$offer_mlb  = 'https://www.facebook.com';
$offer_mls  = 'https://www.facebook.com';
$offer_moto_gp  = 'https://www.facebook.com';
$offer_nba  = 'https://www.facebook.com';
$offer_ncaam  = 'https://www.facebook.com';
$offer_ncaaf  = 'https://www.facebook.com';
$offer_nfl  = 'https://www.facebook.com';
$offer_nhl  = 'https://www.facebook.com';
$offer_premier_league  = 'https://www.facebook.com';
$offer_serie_a  = 'https://www.facebook.com';
$offer_soccer  = 'https://www.facebook.com';
$offer_softball  = 'https://www.facebook.com';
$offer_tennis  = 'https://www.facebook.com';
$offer_ufc  = 'https://www.facebook.com';
$offer_volleyball  = 'https://www.facebook.com';

 // Gambar Player : Keterangan, ganti link gambar dibawah sesuai keinginan kamu, bsa cari gambar d google dgn cara copy link image
$demo = 'https://'.$_SERVER['HTTP_HOST'].'/'.'images/intro-bg.jpg'; // Jangan diganti //

$baseball  = 'https://cdn.mos.cms.futurecdn.net/s7A9t77c4hRdHatQHBof5-1200-80.jpg';
$boxing  = 'https://i.pinimg.com/originals/b0/e3/62/b0e36243478e5f6a0cfe4cc1f050fa02.jpg';
$bundesliga  = 'https://d10dnch8g6iuzs.cloudfront.net/picture/44220200507205221287';
$champions_league  = 'https://img.uefa.com/imgml/uefacom/ucl/social/og-default.jpg';
$copa_america  = 'https://cdnuploads.aa.com.tr/uploads/Contents/2021/07/14/thumbs_b_c_0a9b3b684cf4bb72af271e13b8849cac.jpg?v=021450';
$eredivisie  = 'https://layout.eurosport.com/i/v8/match/backgrounds/large/background_v8_s22.jpg';
$euro  = 'https://europe.stripes.com/sites/default/files/styles/news_node_for_responsive/public/27636443_l.jpg?itok=zSdf0FnV';
$europa_league  = 'https://j8q4b8v6.rocketcdn.me/wp-content/uploads/2021/06/Europa-League-2021-22-Draw-Date-Fixture-Schedule-Key-Dates-Teams.jpg';
$football  = 'https://gopack.com/images/2019/1/16/CarterFinley_2018.jpg';
$formula  = 'https://data1.ibtimes.co.in/cache-img-0-450/en/full/522885/1402135935_fernando-alonso-ferrari.jpg';
$gaa = 'http://www.shannonacademy.com/wp-content/uploads/2019/11/the-spiralling-spending-of-gaa-inter-county-teams.jpg';
$international  = 'https://a.espncdn.com/photo/2019/0326/r519891_1296x729_16-9.jpg';
$la_liga  = 'https://media.dhakatribune.com/uploads/2018/08/laliga-1534239805985.jpg';
$ligue  = 'https://images.indianexpress.com/2020/06/ligue-1-france-fb.jpg';
$mlb  = 'https://www.mlbstatic.com/team-logos/share/mlb.jpg';
$mls  = 'https://cdn.vox-cdn.com/thumbor/o0KF_gDr6t5cjJKI2qDbDE3S_2I=/0x0:620x350/1200x800/filters:focal(262x120:360x218)/cdn.vox-cdn.com/uploads/chorus_image/image/61128197/mls_logo.0.png';
$moto_gp  = 'https://goozir.com/wp-content/uploads/2019/10/MotoGP-2020-rider.jpg';
$nba  = 'https://cdn.nba.net/nba-drupal-prod/styles/landscape_1045w/s3/2018-08/leaguev3.jpeg?itok=Sgxvv0vh';
$ncaam  = 'https://s3.amazonaws.com/smsumustangs.com/images/2017/2/15/NCAAMBBlogo.jpg';
$ncaaf  = 'https://cdnph.upi.com/svc/sv/i/4351538888001/2018/1/15388908998039/College-Football-Roundup-Texas-stuns-Oklahoma.jpg';
$nfl  = 'https://3.bp.blogspot.com/-ETKENqzEHC0/W3SUOU97oiI/AAAAAAAAAHw/1UBfUtlIEUQer771NB2go4de25dI4WtqwCLcBGAs/s640/NFL%252BLive%252BOnline.jpg';
$nhl  = 'https://wallpapercave.com/wp/dG0roJu.jpg';
$premier_league  = 'https://cdn1.thecomeback.com/wp-content/uploads/sites/94/2013/08/epl.jpg';
$serie_a  = 'https://j8q4b8v6.rocketcdn.me/wp-content/uploads/2021/06/Serie-A-Fixtures-2021-22-Serie-A-Release-Date-Schedule-Teams-List.jpg';
$soccer  = 'https://www.wallpaperup.com/uploads/wallpapers/2015/11/08/831528/5852e383c694370899ce214d249ffe42-700.jpg';
$softball  = 'https://gopack.com/common/controls/image_handler.aspx?thumb_prefix=rp_primary&image_path=/images/2018/8/29/HelmetBallBat.jpg';
$tennis  = 'https://bloximages.newyork1.vip.townnews.com/southbendtribune.com/content/tncms/assets/v3/editorial/1/21/1216bbb5-8e12-5dc4-8674-329468528375/5af81423deea5.image.jpg';
$ufc  = 'https://i.pinimg.com/originals/8d/6c/65/8d6c65be9799a74474b1d5068611c856.jpg';
$volleyball  = 'https://www.theindianwire.com/wp-content/uploads/2018/08/DSC_0082.jpg';
define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] ); 