<?php

function pegarIcone($name, $region){
	if ($name || $region) {
		if ($region == 'br1') {
			return 'http://avatar.leagueoflegends.com/BR/'.urlencode($name).'.png';
		}elseif ($region == 'na1') {
			return 'http://avatar.leagueoflegends.com/NA/'.urlencode($name).'.png';
		}elseif ($region == 'oc1') {
			return 'http://avatar.leagueoflegends.com/OCE/'.urlencode($name).'.png';
		}elseif ($region == 'la2') {
			return 'http://avatar.leagueoflegends.com/LAS/'.urlencode($name).'.png';
		}elseif ($region == 'la1') {
			return 'http://avatar.leagueoflegends.com/LAN/'.urlencode($name).'.png';
		}elseif ($region == 'kr') {
			return 'http://avatar.leagueoflegends.com/KR/'.urlencode($name).'.png';
		}elseif ($region == 'jp1') {
			return 'http://avatar.leagueoflegends.com/JP/'.urlencode($name).'.png';
		}elseif ($region == 'euw1') {
			return 'http://avatar.leagueoflegends.com/EUW/'.urlencode($name).'.png';
		}elseif ($region == 'eun1') {
			return 'http://avatar.leagueoflegends.com/EUNE/'.urlencode($name).'.png';
		}elseif ($region == 'tr1') {
			return 'http://avatar.leagueoflegends.com/TR/'.urlencode($name).'.png';
		}elseif ($region == 'ru') {
			return 'http://avatar.leagueoflegends.com/RU/'.urlencode($name).'.png';
		}elseif ($region == 'pbe1') {
			return 'http://avatar.leagueoflegends.com/PBE/'.urlencode($name).'.png';
		}
	}else{
			return 'http://avatar.leagueoflegends.com/BR/naosei.png';
	}
}