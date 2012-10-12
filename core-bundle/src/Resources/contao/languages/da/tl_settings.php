<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/da/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Webstedets titel';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Angiv webstedets titel.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-mail til systemadministratoren';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Angiv en e-mail til systemadministratoren.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Datoformat';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Angiv et datoformat som brugt af PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Angiv et tidsformat som brugt af PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Dato- og tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Angiv et dato- og tidsformat som brugt af PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Tidszone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Angiv din tidszone.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Relativ sti til TYPOlight-mappen';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Angiv den relative sti til mappen med TYPOlight-filerne (f.eks. hvis tilgår TYPOlights backend via <em>www.ditdomæne.dk/ditwebsted/typolight</em> bliver den relative sti <em>>/ditwebsted</em>).';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Tegnsæt';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Angiv tegnsæt. Det anbefales at bruge UTF-8 for at sikre at specielle tegn vises korrekt. Hvis du ikke oplever visningsfejl, skal du ikke ændre på tegnsættet.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Tilpassede layoutsektioner';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Her kan du angive en kommasepareret liste over tilpassede layoutsektioner. Du kan så bruge disse sektioner modulet <em>sidelayout</em> ud over <em>sidehoved</em>, <em>venstre</em>, <em>hoved</em>, <em>højre</em> and <em>sidefod</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Slå command scheduler fra';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Slå den automatiske command scheduler fra og eksekver cron.php scriptet med et rigtig cron job (skal sættes op manuelt).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Komprimer kode';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Komprimer HTML koden før den bliver sendt til browseren (kræver PHP tidy udvidelse)';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Komprimer scripts';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Opret en komprimeret version af CSS og JavaScript filer. (kræver tilpasning af .htacess filen)';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Poster pr. side';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Her kan du definere standarden for antallet af poster, som vises pr. side i back end.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maksimale elementer per side';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Denne overordnede grænse træder i effekt hvis en bruger vælger valgmuligheden "vis alle elementer".';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Udeluk mapper fra synkronisering';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = 'Her kan du indtaste en kommasepareret liste af mapper der vil undtages fra fil synkroniseringen (f.eks. <em>attachments,music_academy</em>). Bemærk at undtagede ressourcer ikke kan benyttes i f.eks. billede eller download elementer.';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Sammenfold ikke elementerne';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Sammenfold ikke indholdselementer og andre ressourcer, når de vises som eksempel i back end.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'URL-endelse';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'URL-endelsen er en fil-endelse der bliver tilføjet URI strengen for at simulere statiske dokumenter. Standard URL-endelsen er <em>.html</em>. Vær opmærksom på at hvis du ikke bruger en URL-endelse, kan det have en negativ effekt på søgemaskinernes rangering af dit site.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Cache tilstand';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Her kan du vælge cache tilstand.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonymiser IP adresser';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonymiserer (skjuler) alle IP adresser der gemmes i databasen, pånær <em>tl_session</em> (denne IP adresse er tilknyttet den aktive session af sikkerhedsmæssige årsager).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonymiser Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonymiser de IP adresser der sendes til Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Genskriv URL';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Med denne mulighed kan du få TYPOlight ´til at generere statiske URL\'er uden "index.php" (f.eks. <em>alias.html</em> i stedet for <em>index.php/alias.html</em>.) Denne funktion kræver Apache-modulet <em>mod_rewrite</em>!';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Tilføj sproget til URL\'en';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Tilføjer det aktive sprog til URL\'en (f.eks. <em>http://domæne.com/da/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Omdiriger ikke tomme URLer';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Ved en tom URL vises websitet i stedet for at omdirigere til sprogets rod side (anbefales ikke).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Aktiver auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Undlad <em>items/</em> eller <em>events/</em> fragmentet i URLer og opsnap automatisk fragmentet baseret på <em>auto_item</em> parameteren.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Deaktiver brug af sidealias';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Hvis du vælger denne mulighed vil TYPOlight bruge det numeriske ID for en side i stedet for dets sidealias til at generere URL\'er (f.eks. <em>index.php?id=12</em> i stedet for <em>hjem.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][0] = 'Aktiver mapper URLer';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][1] = 'Har kan du aktivere mappe lignende sidealiaser f.eks. <em>docs/install/download.html</em> i stedet for <em>docs-install-download.html</em>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Tilladte HTML-tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Angiv en liste over tilladte HTML-tags. Alle andre tags vil blive fjernet fra bruger-input.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Fejlsøgningstilstand';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Vælger du denne mulighed bliver visse kørselsinformationer (f.eks. databaseforespørgsler) vist på skærmen. Denne mulighed er kun anbefalet til systemændringer!';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][0] = 'Omgå den interne midlertidige hukommelse';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][1] = 'Benyt ikke filer fra den interne midlertidige hukommelse (f.eks. smart når der udvikles udvidelser).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Undlad at tjekke henvisende URL (referer)';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Vælg denne mulighed hvis du ikke vil have at TYPOlight tjekker adressen på henviseren, når en formular indsendes. Bemærk venligst at undlade at tjekke henvisende URL (referer) er en stor sikkerhedsrisiko! Typisk opstår med dette tjek problemer pga. sikkerheds- eller anonymitetsværktøjer.';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Ventetid i tilfælde af låst konto';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Angiv hvor lang tid, en bruger skal vente før han tillades at logge ind på en låst konto igen (standard: 5 minutter = 300 sekunder.) Denne funktion skal gøre "brute force"-angreb en lille smule sværere.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Vis fejlmeddelelser';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Hvis du vælger denne mulighed, vil fejlmeddelelser blive vist på skærmen. Denne mulighed er kun anbefalet til systemændringer!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Log fejlbeskeder';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Skriv fejlbeskeder til erro log filen (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Kør i sikker tilstand';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Kør Contao i sikker tilstand og aktiver kun system moduler.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Slå IP-adresse kontrol fra';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Bind ikke sessioner til IP-adresser. Vær opmærksom på at der kan være en sikkerhedsrisiko ved at vælge denne funktion!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Gyldige download filtyper';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Angiv en kommasepareret liste over filendelser for de filtyper, der skal kunne hentes. Af sikkerhedsgrunde er fil-downloads begrænsede til fil-mappen og dens undermapper.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Gyldige filtyper for billeder';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Angiv venligst en kommasepareret liste over filendelser for understøttede filetyper. Inkluder ikke filtyper som ikke kan håndteres af TYPOlight eller dine egne scripts.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Redigerbare filtyper';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Angiv en kommasepareret liste over filendelser for filtyper, som kan redigeres af kilde-editoren.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Filtypeskabeloner';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Her kan du indtaste en kommasepareret liste af supporterede filtyper.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maksimal front end billedebredde';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Her kan du definere den maksimale billedbredde og bredde af mediefiler. Hvis bredden af et indholdselement overskriver denne værdi, vil det blive skaleret ned automatisk.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Miniaturebilleders kvalitet';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Angiv miniaturebilledernes kvalitet i procent (gælder kun for JPG).';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maksimal DG Image bredde';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Her kan du indtaste den maksimale bredde, som GD Image biblioteket skal håndtere';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maksimal DG Image højde';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Her kan du indtaste den maksimale højde, som GD Image biblioteket skal håndtere';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Fil-mappen';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Angiv den relative sti til fil-mappen (standard: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Gyldige upload filtyper';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Angiv en kommasepareret liste over filendelser for de filtyper, der skal kunne uploades. Af sikkerhedsgrunde er fil-downloads begrænsede til fil-mappen og dens undermapper.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Samtidige fil-uploads';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Angiv det maksimale antal af samtidige fil-uploads.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maksimal upload filstørrelse';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Angiv den maksimale upload filstørrelse i bytes (standard: 2 MB = 2048 kB = 2048000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maksimal billedbredde';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Angiv den maksimale billedbredde for fil-uploads i pixel.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maksimal billedhøjde';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Angiv den maksimale billedhøjde for fil-uploads i pixel.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Aktiver søgemaskine';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indekserer automatisk front end sider så de kan blive fundet i søgeresultaterne.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indekser beskyttede sider';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Vælg denne mulighed med omhu og beskyt altid personlige sider mod at blive indekseret.';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Brug SMTP til at sende e-post';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Som standard bruger TYPOlight PHP-funktionen <em>mail()</em> til at sende e-post. Hvis du ønsker det kan du bruge en SMTP-server.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP-værtsnavn';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Angiv værtsnavnet på din SMTP-server (standardværdi er localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'SMTP-brugernavn';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Angiv brugernavn, hvis din SMTP-server kræver godkendelse.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'SMTP-adgangskode';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Angiv adgangskode hvis din SMTP-server kræver godkendelse.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP kryptering';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Her kan du vælge krypterings protokol (SSL og TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP-portnummer';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Angiv det portnummer, din SMTP-server lytter på (standardværdi er 25 eller 465 for SSL-tilslutning).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Inaktive backend moduler';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Her kan du deaktivere unødvendige backend moduler.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Opbevaringstid for fortrydmuligheder';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Angiv opbevaringstid for fortryd-muligheder i sekunder (standard: 24 timer = 86400 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Opbevaringstid for versioner';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Angiv opbevaringstid for forskellige versioner af en post i sekunder (standard: 90 dage = 7776000 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Opbevaringstid for logindgange';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Angiv opbevaringstid forlogindgange i sekunder (standard: 14 dage = 1209600 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Sessionsudøbstid';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Angiv den maksimale livstid for en session i sekunder (standard: 60 minutter = 3600 sekunder.) Hvis der ikke forekommer bruger-input i en længere periode end sessionsudløbstiden, vil den nuværende session blive slettet og brugeren bliver nødt til at logge på igen.';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Automatisk login periode';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Her kan du indstille frontend\'ens automatiske logind periode (90 dage = 7776000 sekunder).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Standard bruger for sider';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Som standard tilhører en side samme bruger som dens forælderside, men hvis ingen bruger er tildelt, vil standard brugeren være ejeren af siden. Hvis der hverken er en bruger eller en standard bruger, vil der ikke være nogen adgangsrestriktioner.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Standard gruppe for sider';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Som standard tilhører en side samme gruppe som dens forælderside, men hvis ingen gruppe er tildelt, vil standard gruppen være ejeren af siden. Hvis der hverken er en gruppe eller en standard gruppe, vil der ikke være nogen adgangsrestriktioner.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Standard rettigheder for sider';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Som standard bruger en side samme rettigheder som dens forælderside, men hvis ingen rettighedsindstillinger er defineret, vil disse standard rettigheder blive brugt.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live-opdatinges URL';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Her kan du skrive URL\'en til live-opdating.';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Hjemmeside titel';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Dato og tid';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Back end konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Front end konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['sections_legend'] = 'Layout sektioner';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Privatlivs indstillinger';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Sikkerhedsindstillinger';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Filer og billeder';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Indstillinger for upload';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Indstillinger for søgemaskiner';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Indstillinger for SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Inaktive udvidelser';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Timeout værdier';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Standard adgangsrettigheder';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Statiske resourcer';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Ændr lokal konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Brug serverens og browserens cache';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Brug kun serverens cache';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Brug kun browserens cache';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Deaktiver caching';
