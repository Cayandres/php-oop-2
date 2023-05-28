<?php 

$categories = [
  'gatto' => new Category('Gatto','fa-solid fa-cat'),
  'cane' => new Category('Cane','fa-solid fa-dog'),
  'pesce' => new Category('Pesce','fa-solid fa-fish'),
  'uccello' => new Category('Uccello','fa-solid fa-dove')
];

$products = [
  new Food('Virtus OnlyFresh', 43.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/275511-200-200/manzo-2.jpg?v=1771678727', $categories['cane'], "545g", ['prosciutto', 'riso']),
  new Food('Purina Gatti', 43.99, 'https://shop-cdn-m.mediazs.com/bilder/purina/one/sterilcat/crocchette/con/manzo/per/gatto/0/400/08445290062307_h1n1_01_it_44160609_0.jpg', $categories['gatto'], "545g", ['prosciutto', 'riso']),
  new Food('Royal Canin Gastrointestinal', 99.99, 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/gastrointestinal/low/fat/canine/veterinary/crocchette/per/cane/8/400/69572_pla_elvetis_royalcanin_veterinarydiet__canine_gastrointestinal_lowfat_6kg_hs_01_8.jpg', $categories['cane'], "545g", ['prosciutto', 'riso']),
  new accessories('Fune per Cani', 43.99, 'https://media.mediazs.com/bilder/0/140/265796_zooplusexclusive_hundespielzeug_ball_seil_hs_05_2_0.jpg', $categories['cane'], "545g", 'Materiale:plastica'),
  new Food('semi', 43.99, 'https://shop-cdn-m.mediazs.com/bilder/lillebro/semi/di/girasole/0/400/lillebro_sack_sbk_1kg_rot_0.jpg', $categories['uccello'],  "105g", ['girasole', 'riso']),
  new accessories('Collare Juius', 13.99, 'https://shop-cdn-m.mediazs.com/bilder/pettorina/juliusk/idc/power/black/7/400/icon_topseller_1_1__7.jpg', $categories['pesce'],'lana', 'Ferro'),
];

