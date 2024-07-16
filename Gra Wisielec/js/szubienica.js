var haslo = "";

// Tablica zawierająca pełne nazwy bohaterów i przedmiotów
const heroes = [
    "Abaddon", "Alchemist", "Ancient Apparition", "Anti-Mage", "Arc Warden", "Axe",
    "Bane", "Batrider", "Beastmaster", "Bloodseeker", "Bounty Hunter", "Brewmaster",
    "Bristleback", "Broodmother", "Centaur Warrunner", "Chaos Knight", "Chen", "Clinkz",
    "Clockwerk", "Crystal Maiden", "Dark Seer", "Dark Willow", "Dawnbreaker", "Dazzle",
    "Death Prophet", "Disruptor", "Doom", "Dragon Knight", "Drow Ranger", "Earth Spirit",
    "Earthshaker", "Elder Titan", "Ember Spirit", "Enchantress", "Enigma", "Faceless Void",
    "Grimstroke", "Gyrocopter", "Hoodwink", "Huskar", "Invoker", "Io", "Jakiro", "Juggernaut",
    "Keeper of the Light", "Kunkka", "Legion Commander", "Leshrac", "Lich", "Lifestealer",
    "Lina", "Lion", "Lone Druid", "Luna", "Lycan", "Magnus", "Marci", "Mars", "Medusa",
    "Meepo", "Mirana", "Monkey King", "Morphling", "Naga Siren", "Nature's Prophet", "Necrophos",
    "Night Stalker", "Nyx Assassin", "Ogre Magi", "Omniknight", "Oracle", "Outworld Destroyer",
    "Pangolier", "Phantom Assassin", "Phantom Lancer", "Phoenix", "Primal Beast", "Puck",
    "Pudge", "Pugna", "Queen of Pain", "Razor", "Riki", "Rubick", "Sand King", "Shadow Demon",
    "Shadow Fiend", "Shadow Shaman", "Silencer", "Skywrath Mage", "Slardar", "Slark", "Snapfire",
    "Sniper", "Spectre", "Spirit Breaker", "Storm Spirit", "Sven", "Techies", "Templar Assassin",
    "Terrorblade", "Tidehunter", "Timbersaw", "Tinker", "Tiny", "Treant Protector", "Troll Warlord",
    "Tusk", "Underlord", "Undying", "Ursa", "Vengeful Spirit", "Venomancer", "Viper", "Visage",
    "Void Spirit", "Warlock", "Weaver", "Windranger", "Winter Wyvern", "Witch Doctor", "Wraith King",
    "Zeus"
];
const items = [
    "Abyssal Blade", "Aether Lens", "Aghanim's Scepter", "Aghanim's Shard", "Animal Courier",
    "Arcane Boots", "Armlet of Mordiggian", "Assault Cuirass", "Band of Elvenskin", "Battle Fury",
    "Black King Bar", "Blade Mail", "Blade of Alacrity", "Blight Stone", "Blink Dagger",
    "Bloodstone", "Bloodthorn", "Boots of Speed", "Boots of Travel", "Bottle", "Bracer", "Broadsword",
    "Buckler", "Butterfly", "Chainmail", "Cheese", "Circlet", "Clarity", "Claymore", "Cloak",
    "Crimson Guard", "Crystalys", "Daedalus", "Dagon", "Demon Edge", "Desolator", "Diffusal Blade",
    "Divine Rapier", "Drum of Endurance", "Dust of Appearance", "Eaglesong", "Echo Sabre",
    "Ethereal Blade", "Eul's Scepter of Divinity", "Eye of Skadi", "Faerie Fire", "Flying Courier",
    "Force Staff", "Gauntlets of Strength", "Gem of True Sight", "Ghost Scepter", "Glimmer Cape",
    "Guardian Greaves", "Hand of Midas", "Headdress", "Healing Salve", "Heart of Tarrasque",
    "Heaven's Halberd", "Helm of the Dominator", "Hood of Defiance", "Hurricane Pike", "Hyperstone",
    "Iron Branch", "Ironwood Tree", "Javelin", "Kaya", "Kaya and Sange", "Linken's Sphere",
    "Lotus Orb", "Maelstrom", "Magic Stick", "Magic Wand", "Manta Style", "Mantle of Intelligence",
    "Mask of Madness", "Medallion of Courage", "Mekansm", "Meteor Hammer", "Mithril Hammer",
    "Mjollnir", "Monkey King Bar", "Moon Shard", "Morbid Mask", "Mystic Staff", "Necronomicon",
    "Null Talisman", "Oblivion Staff", "Octarine Core", "Ogre Axe", "Orb of Venom", "Orchid Malevolence",
    "Perseverance", "Phase Boots", "Pipe of Insight", "Platemail", "Point Booster", "Power Treads",
    "Quarterstaff", "Quelling Blade", "Radiance", "Rapier", "Reaver", "Refresher Orb", "Ring of Aquila",
    "Ring of Basilius", "Ring of Health", "Ring of Protection", "Ring of Regen", "Rod of Atos",
    "Sange", "Sange and Yasha", "Satanic", "Scythe of Vyse", "Shadow Amulet", "Shadow Blade",
    "Shiva's Guard", "Silver Edge", "Skull Basher", "Slippers of Agility", "Smoke of Deceit",
    "Solar Crest", "Soul Booster", "Soul Ring", "Spirit Vessel", "Staff of Wizardry", "Stout Shield",
    "Talisman of Evasion", "Tango", "Town Portal Scroll", "Tranquil Boots", "Ultimate Orb",
    "Urn of Shadows", "Vanguard", "Veil of Discord", "Vladmir's Offering", "Void Stone", "Ward Observer",
    "Ward Sentry", "Wraith Band", "Yasha", "Yasha and Kaya"
];

// Funkcja losująca jedno hasło
function losujHaslo() {
    const wszystkieHasla = [...heroes, ...items];
    const losowyIndex = Math.floor(Math.random() * wszystkieHasla.length);
    haslo = wszystkieHasla[losowyIndex];
}

// Przykład użycia funkcji
losujHaslo();

haslo = haslo.toUpperCase();

var dlugosc = haslo.length;
var ile_skuch = 0;

var yes = new Audio("js/yes.wav");
var no = new Audio("js/no.wav");
var win = new Audio("js/win.mp3");
var lose = new Audio("js/lose.mp3");
var haslo1 = "";

for (let i = 0; i < dlugosc; i++) {
    if (haslo.charAt(i) === " ") {
        haslo1 += " ";
    } else {
        haslo1 += "-";
    }
}

function wypisz_haslo() {
    document.getElementById("plansza").innerHTML = haslo1;
}

window.onload = start;

var litery = [
    "A", "Ą", "B", "C", "Ć", "D", "E", "Ę", "F", "G", "H", "I", "J", "K", "L", "Ł", "M", "N", "Ń", "O", "Ó", "P", "Q", "R", "S", "Ś", "T", "U", "V", "W", "X", "Y", "Z", "Ź", "Ż"
];

function start() {
    var tresc_diva = "";

    for (let i = 0; i <= 34; i++) {
        let element = "lit" + i;
        tresc_diva += '<div class="litera" onclick="sprawdz(' + i + ')" id="' + element + '">' + litery[i] + '</div>';
        if ((i + 1) % 7 === 0) {
            tresc_diva += '<div style="clear:both;"></div>';
        }
    }

    document.getElementById("alfabet").innerHTML = tresc_diva;

    // Resetowanie widoczności obrazków
    for (let i = 0; i <= 9; i++) {
        document.getElementById('invis' + i).style.display = 'none';
    }

    // Ustaw pierwszy obrazek jako widoczny
    document.getElementById('invis0').style.display = 'block';

    wypisz_haslo();
}

String.prototype.ustawZnak = function(miejsce, znak) {
    if (miejsce > this.length - 1) return this.toString();
    return this.substr(0, miejsce) + znak + this.substr(miejsce + 1);
}

function sprawdz(nr) {
    var trafiona = false;
    for (let i = 0; i < dlugosc; i++) {
        if (haslo.charAt(i) === litery[nr]) {
            haslo1 = haslo1.ustawZnak(i, litery[nr]);
            trafiona = true;
        }
    }

    if (trafiona) {
        yes.play();
        var element = "lit" + nr;
        document.getElementById(element).style.background = "#003300";
        document.getElementById(element).style.color = "#00C000";
        document.getElementById(element).style.border = "3px solid #00C000";
        document.getElementById(element).style.cursor = "default";
        document.getElementById(element).onclick = null;
        wypisz_haslo();
    } else {
        no.play();
        var element = "lit" + nr;
        document.getElementById(element).style.background = "#330000";
        document.getElementById(element).style.color = "#C00000";
        document.getElementById(element).style.border = "3px solid #C00000";
        document.getElementById(element).style.cursor = "default";
        document.getElementById(element).onclick = null;
        ile_skuch++;

        // Ukrywanie poprzedniego obrazka
        document.getElementById('invis' + (ile_skuch - 1)).style.display = 'none';
        // Pokazywanie nowego obrazka
        document.getElementById('invis' + ile_skuch).style.display = 'block';
    }

    // Sprawdzenie, czy gracz wygrał
    if (haslo === haslo1) {
        win.play();
        document.getElementById("alfabet").innerHTML = "Tak jest! Podano prawidłowe hasło: " + haslo + '<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
    }

    // Sprawdzenie, czy gracz przegrał
    if (ile_skuch >= 9) {
        lose.play();
        document.getElementById("alfabet").innerHTML = "Przegrana! Prawidłowe hasło: " + haslo + '<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
    }
}