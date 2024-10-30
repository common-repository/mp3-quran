<?php
/* 
 * Files,Languages and functions
 * Author: EDC Team
 * Since: 1.1.2
 */

$sora_names = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An&apos;am ( The Cattle )','Al-A&apos;raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )'
	,'Hud','Yusuf (Joseph )','Ar-Ra&apos;d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu&apos;minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )'
	,'Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )'
	,'Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi&apos;ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu&apos;ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss & Gain )','At-Talaq ( The Divorce )'
	,'At-Tahrim ( The Prohibition )','Surah Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma&apos;arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba&apos; ( The Great News )','An-Nazi&apos;at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A&apos;la ( The Most High )'
	,'Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-&apos;alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-&apos;adiyat ( Those That Run )','Al-Qari&apos;ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma&apos;un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');


function mp3Translations_get_languages($id="English"){
	//$id = intval($id);
	$mp3Translations_Languages = array (
		"Arabic" => array ( 
			"id" => "1",
			"title" => "Mp3 Quran in Arabic",
			"path" => "Quran/Arabic"	),
		"Albanian" => array ( 
			"id" => "2",
			"title" => "Mp3 Quran in Albanian",
			"path" => "Quran/Albanian"),
		"Azeri" => array ( 
			"id" => "3",
			"title" => "Mp3 Quran in Azeri",
			"path" => "Quran/Azeri"),
		"Azerbaijan" => array ( 
			"id" => "4",
			"title" => "Mp3 Quran in Azerbaijan",
			"path" => "Quran/Azerbaijan"),
		"Bangla" => array ( 
			"id" => "5",
			"title" => "Mp3 Quran in Bangla",
			"path" => "Quran/Bangla"),
		"Brazilian" => array ( 
			"id" => "6",
			"title" => "Mp3 Quran in Brazilian",
			"path" => "Quran/Brazilian"),
		"Balochi" => array ( 
			"id" => "7",
			"title" => "Mp3 Quran in Balochi",
			"path" => "Quran/Balochi"),
		"Bosnian" => array ( 
			"id" => "8",
			"title" => "Mp3 Quran in Bosnian",
			"path" => "Quran/Bosnian"),
		"Chichewa" => array ( 
			"id" => "9",
			"title" => "Mp3 Quran in Chichewa",
			"path" => "Quran/Chichewa"),
		"Chinese" => array ( 
			"id" => "10",
			"title" => "Mp3 Quran in Chinese",
			"path" => "Quran/Chinese"),
		"Dutch" => array ( 
			"id" => "11",
			"title" => "Mp3 Quran in Dutch",
			"path" => "Quran/Dutch"),
		"English" => array ( 
			"id" => "12",
			"title" => "Mp3 Quran in English",
			"path" => "Quran/English"),
		"Filipino" => array ( 
			"id" => "13",
			"title" => "Mp3 Quran in Filipino",
			"path" => "Quran/Filipino"),
		"French" => array ( 
			"id" => "14",
			"title" => "Mp3 Quran in French",
			"path" => "Quran/French"),
		"Gujarati" => array ( 
			"id" => "15",
			"title" => "Mp3 Quran in Gujarati",
			"path" => "Quran/Gujarati"),
		"German" => array ( 
			"id" => "16",
			"title" => "Mp3 Quran in German",
			"path" => "Quran/German"),
		"Greek" => array ( 
			"id" => "17",
			"title" => "Mp3 Quran in Greek",
			"path" => "Quran/Greek"),
		"Hausa" => array ( 
			"id" => "18",
			"title" => "Mp3 Quran in Hausa",
			"path" => "Quran/Hausa"),
		"Hindi" => array ( 
			"id" => "19",
			"title" => "Mp3 Quran in Hindi",
			"path" => "Quran/Hindi"),
		"Indonesian" => array ( 
			"id" => "20",
			"title" => "Mp3 Quran in Indonesian",
			"path" => "Quran/Indonesian"),
		"Italian" => array ( 
			"id" => "21",
			"title" => "Mp3 Quran in Italian",
			"path" => "Quran/Italian"),
		"Kashmiri" => array ( 
			"id" => "22",
			"title" => "Mp3 Quran in Kashmiri",
			"path" => "Quran/Kashmiri"),
		"Kanada" => array ( 
			"id" => "23",
			"title" => "Mp3 Quran in Kanada",
			"path" => "Quran/Kanada"),
		"Korean" => array ( 
			"id" => "24",
			"title" => "Mp3 Quran in Korean",
			"path" => "Quran/Korean"),
		"Kurdish" => array ( 
			"id" => "25",
			"title" => "Mp3 Quran in Kurdish",
			"path" => "Quran/Kurdish"),
		"Maranao" => array ( 
			"id" => "26",
			"title" => "Mp3 Quran in Maranao",
			"path" => "Quran/Maranao"),
		"Maranao-1" => array ( 
			"id" => "27",
			"title" => "Mp3 Quran in Maranao-1",
			"path" => "Quran/Maranao-1"),
		"Mexico" => array ( 
			"id" => "28",
			"title" => "Mp3 Quran in Mexico",
			"path" => "Quran/Mexico"),
		"Malayalam" => array ( 
			"id" => "29",
			"title" => "Mp3 Quran in Malayalam",
			"path" => "Quran/Malayalam"),
		"Marathi" => array ( 
			"id" => "30",
			"title" => "Mp3 Quran in Marathi",
			"path" => "Quran/Marathi"),
		"Punjabi" => array ( 
			"id" => "31",
			"title" => "Mp3 Quran in Punjabi",
			"path" => "Quran/Punjabi"),
		"Pashto" => array ( 
			"id" => "32",
			"title" => "Mp3 Quran in Pashto",
			"path" => "Quran/Pashto"),
		"Persian" => array ( 
			"id" => "33",
			"title" => "Mp3 Quran in Persian",
			"path" => "Quran/Persian"),
		"Portuguese" => array ( 
			"id" => "34",
			"title" => "Mp3 Quran in Portuguese",
			"path" => "Quran/Portuguese"),
		"Russian" => array ( 
			"id" => "35",
			"title" => "Mp3 Quran in Russian",
			"path" => "Quran/Russian"),
		"Sindhi" => array ( 
			"id" => "36",
			"title" => "Mp3 Quran in Sindhi",
			"path" => "Quran/Sindhi"),
		"Somali" => array ( 
			"id" => "37",
			"title" => "Mp3 Quran in Somali",
			"path" => "Quran/Somali"),
		"Spanish" => array ( 
			"id" => "38",
			"title" => "Mp3 Quran in Spanish",
			"path" => "Quran/Spanish"),
		"Swedish" => array ( 
			"id" => "39",
			"title" => "Mp3 Quran in Swedish",
			"path" => "Quran/Swedish"),
		"Tagalog" => array ( 
			"id" => "40",
			"title" => "Mp3 Quran in Tagalog",
			"path" => "Quran/Tagalog"),
		"Tamazight" => array ( 
			"id" => "41",
			"title" => "Mp3 Quran in Tamazight",
			"path" => "Quran/Tamazight"),
		"Tamil" => array ( 
			"id" => "42",
			"title" => "Mp3 Quran in Tamil",
			"path" => "Quran/Tamil"),
		"Thai" => array ( 
			"id" => "43",
			"title" => "Mp3 Quran in Thai",
			"path" => "Quran/Thai"),
		"Turkish" => array ( 
			"id" => "44",
			"title" => "Mp3 Quran in Turkish",
			"path" => "Quran/Turkish"),
		"Telugu" => array ( 
			"id" => "45",
			"title" => "Mp3 Quran in Telugu",
			"path" => "Quran/Telugu"),
		"Urdu" => array ( 
			"id" => "46",
			"title" => "Mp3 Quran in Urdu",
			"path" => "Quran/Urdu"),
		"Urdu With Arabic" => array ( 
			"id" => "47",
			"title" => "Mp3 Quran In Urdu With Arabic",
			"path" => "Quran/Arabic-Urdu"),
		"Uyghur" => array ( 
			"id" => "48",
			"title" => "Mp3 Quran in Uyghur",
			"path" => "Quran/Uyghur"),
		"Uzbek" => array ( 
			"id" => "49",
			"title" => "Mp3 Quran in Uzbek",
			"path" => "Quran/Uzbek"),
		"Vietnamese" => array ( 
			"id" => "50",
			"title" => "Mp3 Quran in Vietnamese",
			"path" => "Quran/Vietnamese"),
		"Yoruba" => array ( 
			"id" => "51",
			"title" => "Mp3 Quran in Yoruba",
			"path" => "Quran/Yoruba"),
		"Zulu" => array ( 
			"id" => "52",
			"title" => "Mp3 Quran in Zulu",
			"path" => "Quran/Zulu"),
			//RECITERS START HERE
		"Abdul Rahman Alsudaes" => array ( 
			"id" => "1",
			"title" => "Mp3 Quran by Abdul Rahman Alsudaes",
			"path" => "Abdulrahman-Alsudaes"),
		"Abdulbasit Abdulsamad" => array ( 
			"id" => "2",
			"title" => "Mp3 Quran by Abdulbasit Abdulsamad",
			"path" => "AbdulBaset-AbdulSamad-with-Naeem-Sultan"),
		"Abdur Rashid Sufi" => array ( 
			"id" => "3",
			"title" => "Mp3 Quran by Abdur Rashid Sufi",
			"path" => "AbdurRashid-Sufi"),
		"Ahmed Al Ajmi" => array ( 
			"id" => "4",
			"title" => "Mp3 Quran by Ahmed Al Ajmi",
			"path" => "Ahmed-Alajmi"),
		"Abdulaziz Al Ahmad" => array ( 
			"id" => "5",
			"title" => "Mp3 Quran by Abdulaziz Al Ahmad",
			"path" => "Abdulaziz-Alahmad"),
		"Abdul Wadood Haneef" => array ( 
			"id" => "6",
			"title" => "Mp3 Quran by Abdul Wadood Haneef",
			"path" => "Abdulwadood-Haneef"),
		"Abdulbari Ath Thubaity" => array ( 
			"id" => "7",
			"title" => "Mp3 Quran by Abdulbari Ath Thubaity",
			"path" => "Abdulbari-Ath-Thubaity"),
		"Abdulmohsin Al Obaikhan" => array ( 
			"id" => "8",
			"title" => "Mp3 Quran by Abdulmohsin Al Obaikhan",
			"path" => "Abdulmohsin-AlObaikhan"),
		"Ali Alhuthaifi" => array ( 
			"id" => "9",
			"title" => "Mp3 Quran by Ali Alhuthaifi",
			"path" => "Ali-Alhuthaifi"),
		"Abdullah Basfer" => array ( 
			"id" => "10",
			"title" => "Mp3 Quran by Abdullah Basfer",
			"path" => "Abdullah-Basfer"),
		"Ahmad Al Hawashy" => array ( 
			"id" => "11",
			"title" => "Mp3 Quran by Ahmad Al Hawashy",
			"path" => "Ahmad-Al-Hawashy"),
		"Ahmad Saber" => array ( 
			"id" => "12",
			"title" => "Mp3 Quran by Ahmad Saber",
			"path" => "Ahmad-Saber"),
		"Abdullah Khayyat" => array ( 
			"id" => "13",
			"title" => "Mp3 Quran by Abdullah Khayyat",
			"path" => "Abdullah-Khayyat"),
		"Al Qari Yassen" => array ( 
			"id" => "14",
			"title" => "Mp3 Quran by Al Qari Yassen",
			"path" => "Al-Qari-Yassen"),
		"Aleyoon Alkoshi" => array ( 
			"id" => "15",
			"title" => "Mp3 Quran by Aleyoon Alkoshi",
			"path" => "Aleyoon-Alkoshi"),
		"Abu Baker Shatri" => array ( 
			"id" => "16",
			"title" => "Mp3 Quran by Abu Baker Shatri",
			"path" => "Abu-Baker-Shatri"),
		"Ali Jaber" => array ( 
			"id" => "17",
			"title" => "Mp3 Quran by Ali Jaber",
			"path" => "Ali-Jaber"),
		"Abdulmohsen Alqasim" => array ( 
			"id" => "18",
			"title" => "Mp3 Quran by Abdulmohsen Alqasim",
			"path" => "Abdulmohsen-Alqasim"),
		"Awfeeq As Sayegh" => array ( 
			"id" => "19",
			"title" => "Mp3 Quran by Awfeeq As Sayegh",
			"path" => "Awfeeq-As-Sayegh"),
		"Emad Zuhair Hafth" => array ( 
			"id" => "20",
			"title" => "Mp3 Quran by Emad Zuhair Hafth",
			"path" => "Emad-Zuhair-Hafth"),
		"Fares Abbad" => array ( 
			"id" => "21",
			"title" => "Mp3 Quran by Fares Abbad",
			"path" => "Fares-Abbad"),
		"Hani Arrifai" => array ( 
			"id" => "22",
			"title" => "Mp3 Quran by Hani Arrifai",
			"path" => "Hani-Arrifai"),
		"Ibrahim Alakhdar" => array ( 
			"id" => "23",
			"title" => "Mp3 Quran by Ibrahim Alakhdar",
			"path" => "Ibrahim-Alakhdar"),
		"Jamal Shaker Abdullah" => array ( 
			"id" => "24",
			"title" => "Mp3 Quran by Jamal Shaker Abdullah",
			"path" => "Jamal-Shaker-Abdullah"),
		"Khalid Abdulkhafi" => array ( 
			"id" => "25",
			"title" => "Mp3 Quran by Khalid Abdulkhafi",
			"path" => "Khalid-Abdulkhafi"),
		"Khalid Alqahtani" => array ( 
			"id" => "26",
			"title" => "Mp3 Quran by Khalid Alqahtani",
			"path" => "Khalid-Alqahtani"),
		"Khalifah Al Tonaeijy" => array ( 
			"id" => "27",
			"title" => "Mp3 Quran by Khalifah Al Tonaeijy",
			"path" => "Khalifah-Al-Tonaeijy"),
		"Mahmoud Khalil" => array ( 
			"id" => "28",
			"title" => "Mp3 Quran by Mahmoud Khalil",
			"path" => "Mahmoud-Khalil-Al-Hussary"),
		"Muhammed Al Tablawi" => array ( 
			"id" => "29",
			"title" => "Mp3 Quran by Muhammed Al Tablawi",
			"path" => "Mohd-Altablawi"),
		"Mahmood Al Sheimy" => array ( 
			"id" => "30",
			"title" => "Mp3 Quran by Mahmood Al Sheimy",
			"path" => "Mahmood-AlSheimy"),
		"Mishary Al Afasy" => array ( 
			"id" => "31",
			"title" => "Mp3 Quran by Mishary Al Afasy",
			"path" => "Mishary-Alafasy"),
		"Mustafa Ismail" => array ( 
			"id" => "32",
			"title" => "Mp3 Quran by Mustafa Ismail",
			"path" => "Mustafa-Ismail"),
		"Mustafa Al Lahoni" => array ( 
			"id" => "33",
			"title" => "Mp3 Quran by Mustafa Al Lahoni",
			"path" => "Mustafa-Al-Lahoni"),
		"Mahmood Ali Albana" => array ( 
			"id" => "34",
			"title" => "Mp3 Quran by Mahmood Ali Albana",
			"path" => "Mahmood-Ali-Albana-Muratal"),
		"Mohammad Ayyub" => array ( 
			"id" => "35",
			"title" => "Mp3 Quran by Mohammad Ayyub",
			"path" => "Mohammad-Ayyub"),
		"Maher Al Muaiqly" => array ( 
			"id" => "36",
			"title" => "Mp3 Quran by Maher Al Muaiqly",
			"path" => "Maher-Al-Muaiqly"),
		"Mohammed Al Minshawi" => array ( 
			"id" => "37",
			"title" => "Mp3 Quran by Mohammed Al Minshawi",
			"path" => "Mohammed-Alminshawi-Mujawad"),
		"Mohammad Jibreel" => array ( 
			"id" => "38",
			"title" => "Mp3 Quran by Mohammad Jibreel",
			"path" => "Mohammad-Jibreel"),
		"Mohammed Al Muhasny" => array ( 
			"id" => "39",
			"title" => "Mp3 Quran by Mohammed Al Muhasny",
			"path" => "Mohammed-Al-Muhasny"),
		"Mohammed Siddiq Al Minshawi" => array ( 
			"id" => "40",
			"title" => "Mp3 Quran by Mohammed Siddiq Al Minshawi",
			"path" => "Mohammed-Siddiq-Al-Minshawi"),
		"Mohammad Al Abdullah" => array ( 
			"id" => "41",
			"title" => "Mp3 Quran by Mohammad Al Abdullah",
			"path" => "Mohammad-Al-Abdullah"),
		"Mustafa Raad Al Azawi" => array ( 
			"id" => "42",
			"title" => "Mp3 Quran by Mustafa Raad Al Azawi",
			"path" => "Mustafa-Raad-Al-Azawi"),
		"Nabil Ar Rifai" => array ( 
			"id" => "43",
			"title" => "Mp3 Quran by Nabil Ar Rifai",
			"path" => "Nabil-Ar-Rifai"),
		"Saud Al Shuraim" => array ( 
			"id" => "44",
			"title" => "Mp3 Quran by Saud Al Shuraim",
			"path" => "Saud-Al-Shuraim"),
		"Shirazad Taher" => array ( 
			"id" => "45",
			"title" => "Mp3 Quran by Shirazad Taher",
			"path" => "Shirazad-Taher"),
		"Salah Alhashim" => array ( 
			"id" => "46",
			"title" => "Mp3 Quran by Salah Alhashim",
			"path" => "Salah-Alhashim"),
		"Salah Bukatir" => array ( 
			"id" => "47",
			"title" => "Mp3 Quran by Salah Bukatir",
			"path" => "Salah-Bukatir"),
		"Salah Al Budair" => array ( 
			"id" => "48",
			"title" => "Mp3 Quran by Salah Al Budair",
			"path" => "Salah-Albudair"),
		"Saad Al Ghamdi" => array ( 
			"id" => "49",
			"title" => "Mp3 Quran by Saad Al Ghamdi",
			"path" => "Saad-Alghamdi"),
		"Saud Al Shuraim" => array ( 
			"id" => "50",
			"title" => "Mp3 Quran by Saud Al Shuraim",
			"path" => "Saud-Al-Shuraim"),
		"Sahl Yaaseen" => array ( 
			"id" => "51",
			"title" => "Mp3 Quran by Sahl Yaaseen",
			"path" => "Sahl-Yaaseen"),
		"Yasser Al Mazroyee" => array ( 
			"id" => "52",
			"title" => "Mp3 Quran by Yasser Al Mazroyee",
			"path" => "Yasser-Almazroyee"),
		"Yahya Hawa" => array ( 
			"id" => "53",
			"title" => "Mp3 Quran by Yahya Hawa",
			"path" => "Yahya-Hawa"),
		"Zaki Daghistani" => array ( 
			"id" => "54",
			"title" => "Mp3 Quran by Zaki Daghistani",
			"path" => "Zaki-Daghistani"),
	);
	
	return $mp3Translations_Languages[$id]; //[$keyname]
}

function mp3Translations_get_sounds($language="English"){
	
	$mp3Translations_sounds_8[] = array("1","https://www.truemuslims.net/download.php?path=".$language."/001.mp3","001.mp3");
	$mp3Translations_sounds_8[] = array("2","https://www.truemuslims.net/download.php?path=".$language."/002.mp3","002.mp3");
	$mp3Translations_sounds_8[] = array("3","https://www.truemuslims.net/download.php?path=".$language."/003.mp3","003.mp3");
	$mp3Translations_sounds_8[] = array("4","https://www.truemuslims.net/download.php?path=".$language."/004.mp3","004.mp3");
	$mp3Translations_sounds_8[] = array("5","https://www.truemuslims.net/download.php?path=".$language."/005.mp3","005.mp3");
	$mp3Translations_sounds_8[] = array("6","https://www.truemuslims.net/download.php?path=".$language."/006.mp3","006.mp3");
	$mp3Translations_sounds_8[] = array("7","https://www.truemuslims.net/download.php?path=".$language."/007.mp3","007.mp3");
	$mp3Translations_sounds_8[] = array("8","https://www.truemuslims.net/download.php?path=".$language."/008.mp3","008.mp3");
	$mp3Translations_sounds_8[] = array("9","https://www.truemuslims.net/download.php?path=".$language."/009.mp3","009.mp3");
	$mp3Translations_sounds_8[] = array("10","https://www.truemuslims.net/download.php?path=".$language."/010.mp3","010.mp3");
	$mp3Translations_sounds_8[] = array("11","https://www.truemuslims.net/download.php?path=".$language."/011.mp3","011.mp3");
	$mp3Translations_sounds_8[] = array("12","https://www.truemuslims.net/download.php?path=".$language."/012.mp3","012.mp3");
	$mp3Translations_sounds_8[] = array("13","https://www.truemuslims.net/download.php?path=".$language."/013.mp3","013.mp3");
	$mp3Translations_sounds_8[] = array("14","https://www.truemuslims.net/download.php?path=".$language."/014.mp3","014.mp3");
	$mp3Translations_sounds_8[] = array("15","https://www.truemuslims.net/download.php?path=".$language."/015.mp3","015.mp3");
	$mp3Translations_sounds_8[] = array("16","https://www.truemuslims.net/download.php?path=".$language."/016.mp3","016.mp3");
	$mp3Translations_sounds_8[] = array("17","https://www.truemuslims.net/download.php?path=".$language."/017.mp3","017.mp3");
	$mp3Translations_sounds_8[] = array("18","https://www.truemuslims.net/download.php?path=".$language."/018.mp3","018.mp3");
	$mp3Translations_sounds_8[] = array("19","https://www.truemuslims.net/download.php?path=".$language."/019.mp3","019.mp3");
	$mp3Translations_sounds_8[] = array("20","https://www.truemuslims.net/download.php?path=".$language."/020.mp3","020.mp3");
	$mp3Translations_sounds_8[] = array("21","https://www.truemuslims.net/download.php?path=".$language."/021.mp3","021.mp3");
	$mp3Translations_sounds_8[] = array("22","https://www.truemuslims.net/download.php?path=".$language."/022.mp3","022.mp3");
	$mp3Translations_sounds_8[] = array("23","https://www.truemuslims.net/download.php?path=".$language."/023.mp3","023.mp3");
	$mp3Translations_sounds_8[] = array("24","https://www.truemuslims.net/download.php?path=".$language."/024.mp3","024.mp3");
	$mp3Translations_sounds_8[] = array("25","https://www.truemuslims.net/download.php?path=".$language."/025.mp3","025.mp3");
	$mp3Translations_sounds_8[] = array("26","https://www.truemuslims.net/download.php?path=".$language."/026.mp3","026.mp3");
	$mp3Translations_sounds_8[] = array("27","https://www.truemuslims.net/download.php?path=".$language."/027.mp3","027.mp3");
	$mp3Translations_sounds_8[] = array("28","https://www.truemuslims.net/download.php?path=".$language."/028.mp3","028.mp3");
	$mp3Translations_sounds_8[] = array("29","https://www.truemuslims.net/download.php?path=".$language."/029.mp3","029.mp3");
	$mp3Translations_sounds_8[] = array("30","https://www.truemuslims.net/download.php?path=".$language."/030.mp3","030.mp3");
	$mp3Translations_sounds_8[] = array("31","https://www.truemuslims.net/download.php?path=".$language."/031.mp3","031.mp3");
	$mp3Translations_sounds_8[] = array("32","https://www.truemuslims.net/download.php?path=".$language."/032.mp3","032.mp3");
	$mp3Translations_sounds_8[] = array("33","https://www.truemuslims.net/download.php?path=".$language."/033.mp3","033.mp3");
	$mp3Translations_sounds_8[] = array("34","https://www.truemuslims.net/download.php?path=".$language."/034.mp3","034.mp3");
	$mp3Translations_sounds_8[] = array("35","https://www.truemuslims.net/download.php?path=".$language."/035.mp3","035.mp3");
	$mp3Translations_sounds_8[] = array("36","https://www.truemuslims.net/download.php?path=".$language."/036.mp3","036.mp3");
	$mp3Translations_sounds_8[] = array("37","https://www.truemuslims.net/download.php?path=".$language."/037.mp3","037.mp3");
	$mp3Translations_sounds_8[] = array("38","https://www.truemuslims.net/download.php?path=".$language."/038.mp3","038.mp3");
	$mp3Translations_sounds_8[] = array("39","https://www.truemuslims.net/download.php?path=".$language."/039.mp3","039.mp3");
	$mp3Translations_sounds_8[] = array("40","https://www.truemuslims.net/download.php?path=".$language."/040.mp3","040.mp3");
	$mp3Translations_sounds_8[] = array("41","https://www.truemuslims.net/download.php?path=".$language."/041.mp3","041.mp3");
	$mp3Translations_sounds_8[] = array("42","https://www.truemuslims.net/download.php?path=".$language."/042.mp3","042.mp3");
	$mp3Translations_sounds_8[] = array("43","https://www.truemuslims.net/download.php?path=".$language."/043.mp3","043.mp3");
	$mp3Translations_sounds_8[] = array("44","https://www.truemuslims.net/download.php?path=".$language."/044.mp3","044.mp3");
	$mp3Translations_sounds_8[] = array("45","https://www.truemuslims.net/download.php?path=".$language."/045.mp3","045.mp3");
	$mp3Translations_sounds_8[] = array("46","https://www.truemuslims.net/download.php?path=".$language."/046.mp3","046.mp3");
	$mp3Translations_sounds_8[] = array("47","https://www.truemuslims.net/download.php?path=".$language."/047.mp3","047.mp3");
	$mp3Translations_sounds_8[] = array("48","https://www.truemuslims.net/download.php?path=".$language."/048.mp3","048.mp3");
	$mp3Translations_sounds_8[] = array("49","https://www.truemuslims.net/download.php?path=".$language."/049.mp3","049.mp3");
	$mp3Translations_sounds_8[] = array("50","https://www.truemuslims.net/download.php?path=".$language."/050.mp3","050.mp3");
	$mp3Translations_sounds_8[] = array("51","https://www.truemuslims.net/download.php?path=".$language."/051.mp3","051.mp3");
	$mp3Translations_sounds_8[] = array("52","https://www.truemuslims.net/download.php?path=".$language."/052.mp3","052.mp3");
	$mp3Translations_sounds_8[] = array("53","https://www.truemuslims.net/download.php?path=".$language."/053.mp3","053.mp3");
	$mp3Translations_sounds_8[] = array("54","https://www.truemuslims.net/download.php?path=".$language."/054.mp3","054.mp3");
	$mp3Translations_sounds_8[] = array("55","https://www.truemuslims.net/download.php?path=".$language."/055.mp3","055.mp3");
	$mp3Translations_sounds_8[] = array("56","https://www.truemuslims.net/download.php?path=".$language."/056.mp3","056.mp3");
	$mp3Translations_sounds_8[] = array("57","https://www.truemuslims.net/download.php?path=".$language."/057.mp3","057.mp3");
	$mp3Translations_sounds_8[] = array("58","https://www.truemuslims.net/download.php?path=".$language."/058.mp3","058.mp3");
	$mp3Translations_sounds_8[] = array("59","https://www.truemuslims.net/download.php?path=".$language."/059.mp3","059.mp3");
	$mp3Translations_sounds_8[] = array("60","https://www.truemuslims.net/download.php?path=".$language."/060.mp3","060.mp3");
	$mp3Translations_sounds_8[] = array("61","https://www.truemuslims.net/download.php?path=".$language."/061.mp3","061.mp3");
	$mp3Translations_sounds_8[] = array("62","https://www.truemuslims.net/download.php?path=".$language."/062.mp3","062.mp3");
	$mp3Translations_sounds_8[] = array("63","https://www.truemuslims.net/download.php?path=".$language."/063.mp3","063.mp3");
	$mp3Translations_sounds_8[] = array("64","https://www.truemuslims.net/download.php?path=".$language."/064.mp3","064.mp3");
	$mp3Translations_sounds_8[] = array("65","https://www.truemuslims.net/download.php?path=".$language."/065.mp3","065.mp3");
	$mp3Translations_sounds_8[] = array("66","https://www.truemuslims.net/download.php?path=".$language."/066.mp3","066.mp3");
	$mp3Translations_sounds_8[] = array("67","https://www.truemuslims.net/download.php?path=".$language."/067.mp3","067.mp3");
	$mp3Translations_sounds_8[] = array("68","https://www.truemuslims.net/download.php?path=".$language."/068.mp3","068.mp3");
	$mp3Translations_sounds_8[] = array("69","https://www.truemuslims.net/download.php?path=".$language."/069.mp3","069.mp3");
	$mp3Translations_sounds_8[] = array("70","https://www.truemuslims.net/download.php?path=".$language."/070.mp3","070.mp3");
	$mp3Translations_sounds_8[] = array("71","https://www.truemuslims.net/download.php?path=".$language."/071.mp3","071.mp3");
	$mp3Translations_sounds_8[] = array("72","https://www.truemuslims.net/download.php?path=".$language."/072.mp3","072.mp3");
	$mp3Translations_sounds_8[] = array("73","https://www.truemuslims.net/download.php?path=".$language."/073.mp3","073.mp3");
	$mp3Translations_sounds_8[] = array("74","https://www.truemuslims.net/download.php?path=".$language."/074.mp3","074.mp3");
	$mp3Translations_sounds_8[] = array("75","https://www.truemuslims.net/download.php?path=".$language."/075.mp3","075.mp3");
	$mp3Translations_sounds_8[] = array("76","https://www.truemuslims.net/download.php?path=".$language."/076.mp3","076.mp3");
	$mp3Translations_sounds_8[] = array("77","https://www.truemuslims.net/download.php?path=".$language."/077.mp3","077.mp3");
	$mp3Translations_sounds_8[] = array("78","https://www.truemuslims.net/download.php?path=".$language."/078.mp3","078.mp3");
	$mp3Translations_sounds_8[] = array("79","https://www.truemuslims.net/download.php?path=".$language."/079.mp3","079.mp3");
	$mp3Translations_sounds_8[] = array("80","https://www.truemuslims.net/download.php?path=".$language."/080.mp3","080.mp3");
	$mp3Translations_sounds_8[] = array("81","https://www.truemuslims.net/download.php?path=".$language."/081.mp3","081.mp3");
	$mp3Translations_sounds_8[] = array("82","https://www.truemuslims.net/download.php?path=".$language."/082.mp3","082.mp3");
	$mp3Translations_sounds_8[] = array("83","https://www.truemuslims.net/download.php?path=".$language."/083.mp3","083.mp3");
	$mp3Translations_sounds_8[] = array("84","https://www.truemuslims.net/download.php?path=".$language."/084.mp3","084.mp3");
	$mp3Translations_sounds_8[] = array("85","https://www.truemuslims.net/download.php?path=".$language."/085.mp3","085.mp3");
	$mp3Translations_sounds_8[] = array("86","https://www.truemuslims.net/download.php?path=".$language."/086.mp3","086.mp3");
	$mp3Translations_sounds_8[] = array("87","https://www.truemuslims.net/download.php?path=".$language."/087.mp3","087.mp3");
	$mp3Translations_sounds_8[] = array("88","https://www.truemuslims.net/download.php?path=".$language."/088.mp3","088.mp3");
	$mp3Translations_sounds_8[] = array("89","https://www.truemuslims.net/download.php?path=".$language."/089.mp3","089.mp3");
	$mp3Translations_sounds_8[] = array("90","https://www.truemuslims.net/download.php?path=".$language."/090.mp3","090.mp3");
	$mp3Translations_sounds_8[] = array("91","https://www.truemuslims.net/download.php?path=".$language."/091.mp3","091.mp3");
	$mp3Translations_sounds_8[] = array("92","https://www.truemuslims.net/download.php?path=".$language."/092.mp3","092.mp3");
	$mp3Translations_sounds_8[] = array("93","https://www.truemuslims.net/download.php?path=".$language."/093.mp3","093.mp3");
	$mp3Translations_sounds_8[] = array("94","https://www.truemuslims.net/download.php?path=".$language."/094.mp3","094.mp3");
	$mp3Translations_sounds_8[] = array("95","https://www.truemuslims.net/download.php?path=".$language."/095.mp3","095.mp3");
	$mp3Translations_sounds_8[] = array("96","https://www.truemuslims.net/download.php?path=".$language."/096.mp3","096.mp3");
	$mp3Translations_sounds_8[] = array("97","https://www.truemuslims.net/download.php?path=".$language."/097.mp3","097.mp3");
	$mp3Translations_sounds_8[] = array("98","https://www.truemuslims.net/download.php?path=".$language."/098.mp3","098.mp3");
	$mp3Translations_sounds_8[] = array("99","https://www.truemuslims.net/download.php?path=".$language."/099.mp3","099.mp3");
	$mp3Translations_sounds_8[] = array("100","https://www.truemuslims.net/download.php?path=".$language."/100.mp3","100.mp3");
	$mp3Translations_sounds_8[] = array("101","https://www.truemuslims.net/download.php?path=".$language."/101.mp3","101.mp3");
	$mp3Translations_sounds_8[] = array("102","https://www.truemuslims.net/download.php?path=".$language."/102.mp3","102.mp3");
	$mp3Translations_sounds_8[] = array("103","https://www.truemuslims.net/download.php?path=".$language."/103.mp3","103.mp3");
	$mp3Translations_sounds_8[] = array("104","https://www.truemuslims.net/download.php?path=".$language."/104.mp3","104.mp3");
	$mp3Translations_sounds_8[] = array("105","https://www.truemuslims.net/download.php?path=".$language."/105.mp3","105.mp3");
	$mp3Translations_sounds_8[] = array("106","https://www.truemuslims.net/download.php?path=".$language."/106.mp3","106.mp3");
	$mp3Translations_sounds_8[] = array("107","https://www.truemuslims.net/download.php?path=".$language."/107.mp3","107.mp3");
	$mp3Translations_sounds_8[] = array("108","https://www.truemuslims.net/download.php?path=".$language."/108.mp3","108.mp3");
	$mp3Translations_sounds_8[] = array("109","https://www.truemuslims.net/download.php?path=".$language."/109.mp3","109.mp3");
	$mp3Translations_sounds_8[] = array("110","https://www.truemuslims.net/download.php?path=".$language."/110.mp3","110.mp3");
	$mp3Translations_sounds_8[] = array("111","https://www.truemuslims.net/download.php?path=".$language."/111.mp3","111.mp3");
	$mp3Translations_sounds_8[] = array("112","https://www.truemuslims.net/download.php?path=".$language."/112.mp3","112.mp3");
	$mp3Translations_sounds_8[] = array("113","https://www.truemuslims.net/download.php?path=".$language."/113.mp3","113.mp3");
	$mp3Translations_sounds_8[] = array("114","https://www.truemuslims.net/download.php?path=".$language."/114.mp3","114.mp3");

// 	if($id == 1){
// 		$mp3Translations_sounds = $mp3Translations_sounds_8;
// 	}

	return $mp3Translations_sounds_8;
}
?>