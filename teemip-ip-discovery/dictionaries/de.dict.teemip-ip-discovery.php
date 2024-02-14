<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Classes in 'teemip-discovery Module'
//////////////////////////////////////////////////////////////////////
//

//
// Class: IPDiscovery
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:IPDiscovery' => 'IP-Entdeckung Anwendung',
	'Class:IPDiscovery+' => '',
	'Class:IPDiscovery/Name' => '%1$s',
	'Class:IPDiscovery/Attribute:last_discovery_date' => 'Datum der letzten Entdeckung',
	'Class:IPDiscovery/Attribute:last_discovery_date+' => 'Datum, an dem die Entdeckung zuletzt ausgeführt wurde',
	'Class:IPDiscovery/Attribute:duration' => 'Dauer der Entdeckung',
	'Class:IPDiscovery/Attribute:duration+' => 'Zeit, die benötigt wurde, um die Entdeckung auszugefahren',
	'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled' => 'Entdeckung von DHCP-Bereichen ermöglicht',
	'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled+' => '',
	'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled/Value:yes' => 'Ja',
	'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled/Value:no' => 'Nein',
	'Class:IPDiscovery/Attribute:ping_enabled' => 'Ping enabled',
	'Class:IPDiscovery/Attribute:ping_enabled+' => '',
	'Class:IPDiscovery/Attribute:ping_enabled/Value:yes' => 'Ja',
	'Class:IPDiscovery/Attribute:ping_enabled/Value:no' => 'Nein',
	'Class:IPDiscovery/Attribute:ping_timeout' => 'Ping Timeout-Zeit',
	'Class:IPDiscovery/Attribute:ping_timeout+' => '',
	'Class:IPDiscovery/Attribute:iplookup_enabled' => 'IP-Auflösung ermöglicht',
	'Class:IPDiscovery/Attribute:iplookup_enabled/Value:yes' => 'Ja',
	'Class:IPDiscovery/Attribute:iplookup_enabled/Value:no' => 'Nein',
	'Class:IPDiscovery/Attribute:dns1' => 'DNS-Server #1',
	'Class:IPDiscovery/Attribute:dns1+' => '',
	'Class:IPDiscovery/Attribute:dns2' => 'DNS-Server #2',
	'Class:IPDiscovery/Attribute:dns2+' => '',
	'Class:IPDiscovery/Attribute:scan_enabled' => 'Scan ermöglicht',
	'Class:IPDiscovery/Attribute:scan_enabled+' => '',
	'Class:IPDiscovery/Attribute:scan_enabled/Value:yes' => 'Ja',
	'Class:IPDiscovery/Attribute:scan_enabled/Value:no' => 'Nein',
	'Class:IPDiscovery/Attribute:port_number' => 'Portnummer',
	'Class:IPDiscovery/Attribute:port_number+' => '',
	'Class:IPDiscovery/Attribute:protocol' => 'Protokoll',
	'Class:IPDiscovery/Attribute:protocol+' => '',
	'Class:IPDiscovery/Attribute:protocol/Value:udp' => 'UDP',
	'Class:IPDiscovery/Attribute:protocol/Value:tcp' => 'TCP',
	'Class:IPDiscovery/Attribute:protocol/Value:both' => 'Beide',
	'Class:IPDiscovery/Attribute:scan_timeout' => 'Scan Timeout-Zeit',
	'Class:IPDiscovery/Attribute:scan_timeout+' => '',
	'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled' => 'Betrachten Sie "connection refused" als gültig',
	'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled+' => '',
	'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled/Value:yes' => 'Ja',
	'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled/Value:no' => 'Nein',
	'Class:IPDiscovery/Attribute:ipv4subnets_list' => 'Verwaltete IPv4 Subnetz',
	'Class:IPDiscovery/Attribute:ipv4subnets_list+' => '',
	'Class:IPDiscovery:baseinfo' => 'Allgemeine Hinweise',
	'Class:IPDiscovery:operation' => 'Operationen',
	'Class:IPDiscovery:pinginfo' => 'Ping-Funktion',
	'Class:IPDiscovery:iplookupinfo' => 'IP-Auflösung-Funktion',
	'Class:IPDiscovery:scaninfo' => 'Scan-Funktion',
));

// Class: IPObject

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:IPObject/Attribute:status/Value:discovered' => 'Entdeckt',
	'Class:IPObject/Attribute:status/Value:discovered+' => '',
));

//
// Class: IPSubnet
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:IPSubnet/Attribute:ipdiscovery_id' => 'IP-Entdeckung Anwendung',
	'Class:IPSubnet/Attribute:ipdiscovery_id+' => '',
	'Class:IPAddress/Attribute:ipdiscovery_name' => 'IP-Entdeckung Anwendung Name',
	'Class:IPAddress/Attribute:ipdiscovery_name+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_enabled' => 'IP-Entdeckung aktiviert',
	'Class:IPSubnet/Attribute:ipdiscovery_enabled+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_enabled/Value:yes' => 'Ja',
	'Class:IPSubnet/Attribute:ipdiscovery_enabled/Value:no' => 'Nein',
	'Class:IPSubnet/Attribute:last_discovery_date' => 'Datum der letzten Entdeckung',
	'Class:IPSubnet/Attribute:last_discovery_date+' => 'Datum, an dem das Subnetz zuletzt entdeckt wurde',
	'Class:IPSubnet/Attribute:ipdiscovery_dhcp_range_discovery_enabled' => 'Entdeckung von DHCP-Bereichen ermöglicht',
	'Class:IPSubnet/Attribute:ipdiscovery_dhcp_range_discovery_enabled+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_ping_enabled' => 'IP-Entdeckung Ping ermöglicht',
	'Class:IPSubnet/Attribute:ipdiscovery_ping_enabled+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_iplookup_enabled' => 'IP-Entdeckung IP-Auflösung ermöglicht',
	'Class:IPSubnet/Attribute:ipdiscovery_iplookup_enabled+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_scan_enabled' => 'IP-Entdeckung Scan ermöglicht',
	'Class:IPSubnet/Attribute:ipdiscovery_scan_enabled+' => '',
	'Class:IPSubnet/Attribute:ipdiscovery_scan_cnx_refused_enabled' => 'Die IP-Entdeckung betrachtet den Scan "connection refused" als gültig',
	'Class:IPSubnet/Attribute:ipdiscovery_scan_cnx_refused_enabled+' => '',
	'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled' => 'Entdeckung von DHCP-Bereichen ermöglicht für der Subnetz',
	'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled+' => '',
	'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled/Value:yes' => 'Ja',
	'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled/Value:no' => 'Nein',
	'Class:IPSubnet/Attribute:ping_enabled' => 'Ping ermöglicht für der Subnetz',
	'Class:IPSubnet/Attribute:ping_enabled+' => '',
	'Class:IPSubnet/Attribute:ping_enabled/Value:yes' => 'Ja',
	'Class:IPSubnet/Attribute:ping_enabled/Value:no' => 'Nein',
	'Class:IPSubnet/Attribute:iplookup_enabled' => 'IP-Auflösung ermöglicht für der Subnetz',
	'Class:IPSubnet/Attribute:iplookup_enabled+' => '',
	'Class:IPSubnet/Attribute:iplookup_enabled/Value:yes' => 'Ja',
	'Class:IPSubnet/Attribute:iplookup_enabled/Value:no' => 'Nein',
	'Class:IPSubnet/Attribute:scan_enabled' => 'Scan ermöglicht für der Subnetz',
	'Class:IPSubnet/Attribute:scan_enabled+' => '',
	'Class:IPSubnet/Attribute:scan_enabled/Value:yes' => 'Ja',
	'Class:IPSubnet/Attribute:scan_enabled/Value:no' => 'Nein',
	'Class:IPSubnet/Attribute:ping_duration' => 'Dauer der IP-Ping',
	'Class:IPSubnet/Attribute:ping_duration+' => 'Zeit, die benötigt wurde, um alle IPs im Subnetz zu "pingen"',
	'Class:IPSubnet/Attribute:iplookup_duration' => 'Dauer der IP-Auflösung',
	'Class:IPSubnet/Attribute:iplookup_duration+' => 'Zeit, die benötigt wurde, um eine IP-Auflösung für alle IPs im Subnetz durchzuführen',
	'Class:IPSubnet/Attribute:scan_duration' => 'Dauer der IP-Scan',
	'Class:IPSubnet/Attribute:scan_duration+' => 'Zeit, die benötigt wurde, um alle IP-Adressen im Subnetz zu scan',
	'Class:IPSubnet:discoveryapp' => 'Entdeckung: Anwendungseinstellungen',
	'Class:IPSubnet:discoverysubnet' => 'Entdeckung: Subnetzeinstellungen',
	'Class:IPSubnet:discoverystats' => 'Entdeckung: Statistiken',

));

//
// Class: IPAddress
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:IPAddress/Attribute:last_discovery_date' => 'Datum der letzten Entdeckung',
	'Class:IPAddress/Attribute:last_discovery_date+' => 'Datum, an dem die Adresse zuletzt entdeckt wurde',
	'Class:IPAddress/Attribute:responds_to_ping' => 'Antwortet auf Ping',
	'Class:IPAddress/Attribute:responds_to_ping+' => '',
	'Class:IPAddress/Attribute:responds_to_ping/Value:yes' => 'Ja',
	'Class:IPAddress/Attribute:responds_to_ping/Value:no' => 'Nein',
	'Class:IPAddress/Attribute:responds_to_ping/Value:na' => 'N/A',
	'Class:IPAddress/Attribute:responds_to_iplookup' => 'Antwortet auf IP-Auflösung',
	'Class:IPAddress/Attribute:responds_to_iplookup+' => '',
	'Class:IPAddress/Attribute:responds_to_iplookup/Value:yes' => 'Ja',
	'Class:IPAddress/Attribute:responds_to_iplookup/Value:no' => 'Nein',
	'Class:IPAddress/Attribute:responds_to_iplookup/Value:na' => 'N/A',
	'Class:IPAddress/Attribute:fqdn_from_iplookup' => 'FQDN von IP-Auflösung',
	'Class:IPAddress/Attribute:fqdn_from_iplookup+' => '',
	'Class:IPAddress/Attribute:responds_to_scan' => 'Antwortet auf Scan',
	'Class:IPAddress/Attribute:responds_to_scan+' => '',
	'Class:IPAddress/Attribute:responds_to_scan/Value:yes' => 'Ja',
	'Class:IPAddress/Attribute:responds_to_scan/Value:no' => 'Nein',
	'Class:IPAddress/Attribute:responds_to_scan/Value:cnx_refused' => 'Verbindung abgelehnt',
	'Class:IPAddress/Attribute:responds_to_scan/Value:na' => 'N/A',
	'Class:IPAddress:discoveryinfo' => 'Entdeckung Informationen',
));

//
// Application Menu
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:IPDiscovery' => 'IP-Entdeckung',
	'Menu:IPDiscoveryApplication' => 'IP-Entdeckung Anwendungen',
	'Menu:IPDiscoveryApplication+' => 'Alle IP-Entdeckung Anwendungen',
	'Menu:IPDiscovery:IPv4Statistics' => 'IPv4 Statistiken',
	'Menu:IPDiscovery:IPv6Statistics' => 'IPv6 Statistiken',
	'Menu:IPDiscovery:IPv4Status' => 'IPv4 Addressen bei Zustand',
	'Menu:IPDiscovery:IPv4Ping' => 'IPv4 Addressen mit ein Ping',
	'Menu:IPDiscovery:IPv4Scan' => 'IPv4 Addressen mit einer Antwort auf der Scan',
	'Menu:IPDiscovery:IPv4Lookup' => 'IPv4 Addressen mit DNS-Eintrag',
	'Menu:IPDiscovery:IPv6Status' => 'IPv6 Addressen bei Zustand',
	'Menu:IPDiscovery:IPv6Ping' => 'IPv6 Addressen mit ein Ping',
	'Menu:IPDiscovery:IPv6Scan' => 'IPv6 Addressen mit einer Antwort auf der Scan',
	'Menu:IPDiscovery:IPv6Lookup' => 'IPv6 Address mit DNS-Eintrag',
	'Menu:IPDiscovery:IPv4DiscoveredSubnets' => 'IPv4 Subnetz verknüpft an eine IP-Entdeckung Anwendung',
	'Menu:IPDiscovery:IPv6DiscoveredSubnets' => 'IPv6 Subnetz verknüpft an eine IP-Entdeckung Anwendung',
	'UI:IPDiscovery:Action:New:UUIDCollision' => 'UUIDs muss über TeemIp eindeutig sein!',
	'UI:IPDiscovery:Action:New:ScanWithNoPort' => 'Ein Portnummer musst angegeben sein wenn der Scan-Funktion ermöglicht ist!'
));
