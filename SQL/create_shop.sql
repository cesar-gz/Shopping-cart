CREATE TABLE IF NOT EXISTS shop(
    item_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(20) NOT NULL,
    item_desc VARCHAR(250) NOT NULL,
    item_img VARCHAR(20) NOT NULL,
    item_price DECIMAL(6,2) NOT NULL,
    PRIMARY KEY(item_id)
);

INSERT INTO shop(item_name, item_desc, item_img, item_price)
VALUES
("Energy Sword", "Its lunge attack and one-hit-kill capability make it a formidable weapon in skilled hands. It is only allowed to be utilized by high-ranked Elites in the campaign, and any lower subordinates are strictly forbidden from using this weapon.", "images/energy.png", 49.99),
("Master Ball", "A rare and highly coveted Poke Ball in the Pokemon series that has a 100% capture rate, allowing trainers to catch any wild Pokemon without fail.", "images/ball.png", 59.99),
("Light Saber", "A blade of pure energy that can cut through almost anything and is primarily used by Jedi and Sith warriors in combat.", "images/saber.png", 79.99),
("Portal Gun", "A handheld device that allows its user to create portals, enabling instantaneous travel between different locations or dimensions. Warranty is not included, and liability falls with owner.", "images/portal.png", 69.99),
("Berserker Armor", "A cursed suit that grants its wearer immense strength and endurance at the cost of losing control over their actions, pushing them into a state of relentless and uncontrollable rage.", "images/berserker.png", 99.99);
