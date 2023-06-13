CREATE TABLE IF NOT EXISTS shop(
    item_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(20) NOT NULL,
    item_desc VARCHAR(200) NOT NULL,
    item_img VARCHAR(20) NOT NULL,
    item_price DECIMAL(6,2) NOT NULL,
    PRIMARY KEY(item_id)
);

INSERT INTO shop(item_name, item_desc, item_img, item_price)
VALUES
("Energy Sword", "Its lunge attack and one-hit-kill capability make it a formidable weapon in skilled hands.", "images/energy.png", 499.99),
("Master Ball", "A rare and highly coveted Poke Ball in the Pokémon series that has a 100% capture rate, allowing trainers to catch any wild Pokemon without fail.", "images/ball.png", 599.99),
("Light Saber", "A blade of pure energy that can cut through almost anything and is primarily used by Jedi and Sith warriors in combat.", "images/saber.png", 799.99),
("Portal Gun", "A handheld device that allows its user to create portals, enabling instantaneous travel between different locations or dimensions", "images/portal.png", 699.99),
("Berserker Armor", "A cursed suit that grants its wearer immense strength and endurance at the cost of losing control over their actions, pushing them into a state of relentless and uncontrollable rage.", "images/berserker.png", 899.99);
