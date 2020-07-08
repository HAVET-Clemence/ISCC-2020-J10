SELECT `produit`.*
FROM `produit`;
SELECT `produit`.`nom`
FROM `produit`
WHERE `produit`.`nom` LIKE '%T-shirt%';
SELECT `produit`.`prix`
FROM `produit`
WHERE `produit`.`prix` LIKE '19.99';
SELECT `produit`.`quantite`
FROM `produit`
WHERE `produit`.`quantite` = '5';
