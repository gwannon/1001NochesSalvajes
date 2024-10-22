<?php

header('Content-Type: application/json; charset=utf-8');

$bots = [
  "facebookexternalhit/1.1",
  "Semanticbot/1.0",
  "serpstatbot/2.1",
  "Twitterbot/1.0",
  "SemrushBot/7~bl",
  "bingbot/2.0",
  "WhatsApp/2",
  "BW/1.1",
  "Applebot/0.1",
  "SeznamBot/4.0",
  "DataForSeoBot/1.0",
  "AhrefsBot/7.0",
  "YandexBot/3.0",
  "Googlebot-Image/1.0",
  "Googlebot/2",
  "IonCrawl",
  "SemrushBot/7",
  "help@dataminr.com",
  "BW/1.1",
  "Mastodon/4",
  "Mastodon/3",
  "craftopi.art",
  "Bytespider",
  "Pleroma 2",
  "Akkoma 3",
  "TelegramBot",
  "BLEXBot/1.0",
  "SerendeputyBot",
  "SummalyBot",
  "Friendica",
  "test-bot",
  "my-tiny-bot",
  "thesis-research-bot",
  "LivelapBot",
  "ShortLinkTranslate",
  "TrendsmapResolver",
  "EventMachine HttpClient",
  "linkfluence.com",
  "Python-urllib/3.9",
  "ddg_android",
  "DotBot",
  "FlipboardProxy",
  "w3m/0",
  "LinkPreview/",
  "panscient.com",
  "fedistatsCrawler",
  "AwarioBot",
  "Cardyb/",
  "Amazonbot",
  "website-datenbank.de",
  "NetBSD alpha",
  "LivelapBot/0.2",
  "SummalyBot/2",
  "ImagesiftBot",
  "trendictionbot",
  "MJ12bot",
  "OpenGraph.io",
  "trendictionbot",
  "Yeti/",
  "ClaudeBot",
  "Friendly_Crawler/",
  "GoogleOther",
  "RottenLinks",
  "enby-town",
  "Barkrowler",
  "python-requests",
  "DuckDuckBot",
  "Iceshrimp",
  "Embedly/",
  "Google-Safety",
  "axios/",


  "127.0.0.1",


  "54.39.104.161", //OVH SAS
  "51.222.42.127", //OVH SAS
  "54.39.103.203", //OVH SAS
  "149.56.25.49", //OVH SAS
  "54.39.50.77", //OVH SAS
  "51.161.115.227", //OVH SAS
  "167.114.1.197", //OVH SAS
  "51.161.117.63", //OVH SAS
  "144.217.74.133", //OVH SAS
  "167.114.173.221", //OVH SAS
  "158.69.27.238", //OVH SAS
  "192.99.44.57", //OVH SAS
  "167.114.101.27", //OVH SAS
  "167.114.101.27", //OVH SAS
  "158.69.27.213", //OVH SAS
  "142.44.136.207", //OVH SAS
  "158.69.124.235", //OVH SAS
  "192.99.62.32", //OVH SAS
  "15.235.114.226", //OVH SAS
  "54.39.243.52", //OVH SAS
  "192.99.19.229", //OVH SAS
  "144.217.255.152", //OVH SAS
  "167.114.159.149", //OVH SAS
  "51.161.115.226", //OVH SAS
  "192.99.101.184", //OVH SAS
  "167.114.119.164", //OVH SAS
  "51.222.42.126", //OVH SAS
  "51.161.84.126", //OVH SAS
  "142.4.217.87", //OVH SAS
  "51.161.84.125", //OVH SAS
  "167.114.1.28", //OVH SAS
  "51.79.77.186", //OVH SAS
  "54.39.107.240", //OVH SAS
  "192.99.232.216", //OVH SAS
  "158.69.125.158", //OVH SAS
  "51.79.99.78", //OVH SAS
  "144.217.252.156", //OVH SAS
  "54.39.48.97", //OVH SAS
  "51.79.77.165", //OVH SAS
  "51.38.135.19", //OVH SAS
  "54.39.107.63", //OVH SAS
  "188.165.87.101", //OVH SAS
  "188.165.87.103", //OVH SAS




  
  "116.202.35.85", //Hetzner Online GmbH
  "116.202.33.240", //Hetzner Online GmbH
  "116.202.33.233", //Hetzner Online GmbH
  "168.119.76.160", //Hetzner Online GmbH
  "168.119.76.212", //Hetzner Online GmbH
  "168.119.76.242", //Hetzner Online GmbH
  "168.119.76.227", //Hetzner Online GmbH
  "168.119.76.151", //Hetzner Online GmbH
  "168.119.76.254", //Hetzner Online GmbH
  "168.119.76.165", //Hetzner Online GmbH
  "144.76.22.143", //Hetzner Online GmbH
  "116.202.35.89", //Hetzner Online GmbH
  "116.202.35.108", //Hetzner Online GmbH
  "176.9.32.135", //Hetzner Online GmbH
  "168.119.76.225", //Hetzner Online GmbH
  "168.119.76.159", //Hetzner Online GmbH
  "168.119.76.216", //Hetzner Online GmbH
  "168.119.76.234", //Hetzner Online GmbH
  "168.119.76.141", //Hetzner Online GmbH
  "168.119.76.224", //Hetzner Online GmbH
  "168.119.76.139", //Hetzner Online GmbH
  "65.21.158.47", //Hetzner Online GmbH
  "135.181.214.38", //Hetzner Online GmbH
  "195.201.111.82", //Hetzner Online GmbH
  "65.108.3.41", //Hetzner Online GmbH
  "65.108.31.118", //Hetzner Online GmbH
  "65.109.155.237", //Hetzner Online GmbH


  "52.17.217.34", //Amazon
  "34.254.253.69", //Amazon
  "63.32.55.216", //Amazon
  "18.201.90.114", //Amazon 
  "34.241.80.146", //Amazon
  "3.254.66.73", //Amazon
  "34.248.143.69", //Amazon
  "3.234.218.179", //AWS
  "44.200.47.118", //AWS
  "35.86.85.67", //AWS
  



  "66.102.8.38", //Google LLC
  "66.102.6.195", //Google LLC
  "66.102.6.194", //Google LLC
  "66.102.8.129", //Google LLC
  "66.102.8.128", //Google LLC
  "64.233.172.205", //Google LLC
  "74.125.210.98", //Google LLC
  "66.102.8.130", //Google LLC
  "66.102.6.65", //Google LLC
  "35.203.255.103", //Google LLC
  "35.203.255.118", //Google LLC
  "34.82.76.88", //Google LLC
  "34.83.246.238", //Google LLC
  "34.127.116.233", //Google LLC
  "34.127.44.221", //Google LLC
  "34.168.176.99", //Google LLC
  "34.145.25.95", //Google LLC
  "34.82.195.191", //Google LLC
  "35.197.69.215", //Google LLC
  "35.230.63.62", //Google LLC
  "34.82.76.88", //Google LLC
  "35.197.96.25", //Google LLC
  "34.168.74.175", //Google LLC
  "34.82.33.21", //Google LLC
  "34.82.82.71", //Google LLC
  "34.83.61.204", //Google LLC
  "34.82.199.128", //Google LLC
  "35.233.229.143", //Google LLC
  "34.83.45.161", //Google LLC
  "34.168.138.243", //Google LLC
  "34.105.34.194", //Google Other
  "34.82.27.245", //Google Cloud
  "107.178.200.214", //Google Cloud
  "66.249.84.37", //Google Cloud
  "35.199.156.248", //Google
  "35.203.137.203", //Google
  "35.203.169.138", //Google
  "34.82.24.138", //Google
  "34.145.38.93", //Google
  "34.83.137.214", //Google
  "34.168.165.88", //Google
  "35.247.41.57", //Google
  "74.125.210.103", //Google
  "74.125.210.102", //Google
  "34.168.12.15", //Google
  "34.168.186.146", //Google
  "34.82.60.8", //Google
  "35.233.134.123", //Google
  "34.127.23.123", //Google
  "35.247.10.37", //Google
  "34.127.19.44", //Google
  "35.233.154.65", //Google
  "35.227.135.60", //Google
  "35.197.102.237", //Google
  "34.82.137.215", //Google
  "35.203.128.192", //Google
  "35.247.63.215", //Google
  "74.125.212.103", //Google
  "66.249.80.101", //Google
  "34.82.213.222", //Google
  "34.145.13.150", //Google
  "35.197.114.69", //Google
  "34.118.197.113", //Google
  "74.125.210.192", //Google
  "34.127.61.12", //Google
  "34.127.61.12", //Google
  "34.83.144.105", //Google
  "34.83.77.146", //Google
  "74.125.210.194", //Google
  "34.82.244.124", //Google
  "35.197.12.137", //Google
  "35.203.252.116", //Google
  "34.168.234.157", //Google
  "35.197.98.142", //Google
  "34.83.160.222", //Google
  "35.230.59.169", //Google
  "35.233.223.105", //Google
  "35.215.115.32", //Google
  "74.125.215.71", //Google
  "34.1.24.54", //Google
  "64.233.172.71", //Google
  "34.82.140.254", //Google
  "34.145.76.84", //Google
  "34.83.106.193", //Google
  "34.105.18.18", //Google
  "35.233.216.255", //Google
  "66.249.80.3", //Google
  "34.169.83.44", //Google
  "34.0.150.110", //Google
  "35.197.122.57", //Google
  "66.102.6.35", //Google
  "34.83.131.14", // Google
  "35.213.195.32", // Google
  "35.247.38.200", // Google
  "34.83.148.172", // Google
  "34.168.135.16", // Google

  "128.199.15.211", //Digital Ocean LLC
 

  "62.174.208.61", //My IP
  "47.58.171.195", //My IP
  "46.26.127.194", //My IP
  "47.58.174.97", //My IP
  "47.58.165.154", // My IP
];

if(isset($_REQUEST['bots']) && $_REQUEST['bots'] != '') {
  echo json_encode($bots);
  die;
}

$ips = [];
$json["total"] = 0;
$lines = explode("\n", file_get_contents (__DIR__."/log.txt"));
foreach ($lines as $line) {
  if($line != '') {
    $fields =  explode("|", $line);
    $last_key = array_key_last($fields);
    if ( !preg_match('('.implode('|',$bots).')', $fields[$last_key]) && !preg_match('('.implode('|',$bots).')', $fields[1])) {
      $json["descargas"][] = $fields;
      if(!in_array($fields[1], $ips)) {
        $ips[] = $fields[1];
        $json['total'] ++;
      }
    }
  }
}

$json["descargas"] = array_reverse($json["descargas"]);
echo json_encode($json);
