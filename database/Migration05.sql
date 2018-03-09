ALTER TABLE posts ADD COLUMN image_url NVARCHAR (128);
ALTER TABLE posts ADD COLUMN slug NVARCHAR (256);
UPDATE posts SET is_show = 0 WHERE id = 3;

UPDATE posts SET title = 'Announcement', 
slug = 'Gift Certificate is now Available at KQFI Designated Outlets',
image_url = 'kqfi_gc.png',
body = 'Gift Certificate is now Available at KQFI Designated Outlets (Leon Kilat, Fuente, Carbon, Paknaan Mandaue and Tabunok)'
WHERE id = 2

UPDATE posts SET title = 'RAFFLE DRAW WINNERS', 
slug = 'King\'s Quality Foods (Cebu), Inc. December 14, 2013 raffle draw Winners.',
image_url = 'kqfi_promo01.jpg',
body = '<div class="table"><span>1st Prize</span><span>Alexander Bongo</span><span>(Rajah Motorbike)</span><br />
<span>2nd Prize</span><span>Paraluman Correa</span><span>(Archer Motorbike)</span><br />
<span>3rd Prize</span><span>Jenalyn Sabad</span><span>(15 cu. Ft. Freezer)</span></div>
<br /><br />
<div class="table">
<b>Gift Certificate Winners</b><br /><br />
<span>Alejandro Tudtud</span><span>Lester Casallas</span><br />
<span>Annabelle Dungog</span><span>Mariadelinda Diaz</span><br />
<span>Bonet Rodriguez</span><span>May Salazar</span><br />
<span>Carmen Pagandy</span><span>Nenita Darmail</span><br />
<span>Elmer Nu&ntilde;ez</span><span>Panilag Merlinda</span><br />
<span>Ethni Garsula</span><span>Relna Godinez</span><br />
<span>Gerland Caldaza</span>
<span>Richie Atillo</span><br />
<span>Joemark Mutia</span>
<span>Soriano Jesse</span><br />
<span>Josphine Pastrero</span>
<span>Susan Remedio</span><br />
<span>Kara Redelosa</span>
<span>Tomas Mortorillas</span>
</div><br /><br />
<div class="table">
<b>Sack of Rice Winners</b></span><br />
<span>Analie Tandog</span>
<span>Lynneth Rafil</span><br />
<span>Barbette Blance Agranio</span>
<span>Merdawena Bubuli</span><br />
<span>Carmela Villahermosa</span>
<span>Mery Margaret Young</span><br />
<span>Eduard Vincent Caspe</span>
<span>Nena Empleo</span><br />
<span>Egbert Fajardo</span>
<span>Nieva Fua</span><br />
<span>Erpie Aonor</span>
<span>Olmedo Lorena</span><br />
<span>Fernando Gimena</span>
<span>Pe&ntilde;as Arnold</span><br />
<span>Helnida Yee</span>
<span>Ricardo Legaspi</span><br />
<span>Imelda Baguio</span>
<span>Rolando Lambojon</span><br />
<span>Irene Villoseroz</span>
<span>Russel Bihag</span><br />
<span>Joan Berli Denampo</span>
<span>Silogan Ni Gian</span><br />
<span>Lina Morales</span>
<span>Vicente Mendez</span><br />
<span>Lito Terol</span></div><br /><br />'
WHERE id = 1






