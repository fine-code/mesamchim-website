CREATE TABLE product (
    id VARCHAR(64) NOT NULL, 
    date_created DATETIME NOT NULL,
    date_deleted DATETIME NOT NULL, 
    name VARCHAR(64) NOT NULL, 
    description VARCHAR(500) NOT NULL, 
    color VARCHAR(32) NOT NULL, 
    price DOUBLE NOT NULL,
    PRIMARY KEY(id)
)
CREATE TABLE orders (
    id VARCHAR(64) NOT NULL,
    user_id VARCHAR(64) NOT NULL,
    date_created DATETIME NOT NULL,
    date_deleted DATETIME NULL,
    event_date DATETIME NOT NULL,
    event_type VARCHAR(64) NOT NULL,
    delivery SMALLINT NOT NULL,
    delivery_fee DOUBLE NULL,
    delivery_date DATETIME NOT NULL,
    total_price DOUBLE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES USER(id)
) ENGINE = INNODB;

CREATE TABLE cart(
    id VARCHAR(64) NOT NULL,
    user_id VARCHAR(64) NOT NULL,
    date_created DATETIME NOT NULL,
    date_deleted DATETIME NULL,
    total_price DOUBLE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES USER(id)
) ENGINE = INNODB;

CREATE TABLE cart_items(
    cart_id VARCHAR(64) NOT NULL,
    product_id VARCHAR(64) NOT NULL,
    item_qty INT NOT NULL,
    PRIMARY KEY(cart_id, product_id),
    date_created DATETIME NOT NULL,
    date_deleted DATETIME NULL,
    FOREIGN KEY(cart_id) REFERENCES cart(id),
    FOREIGN KEY(product_id) REFERENCES PRODUCT(id)
) ENGINE = INNODB;

CREATE TABLE order_details(
    order_id VARCHAR(64) NOT NULL,
    product_id VARCHAR(64) NOT NULL,
    item_qty INT NOT NULL,
    PRIMARY KEY(order_id, product_id),
    date_created DATETIME NOT NULL,
    date_deleted DATETIME NULL,
    FOREIGN KEY(order_id) REFERENCES ORDERs(id),
    FOREIGN KEY(product_id) REFERENCES PRODUCT(id)
) ENGINE = INNODB;