# YuGiOh Pegasus' Castle Sprint

A simple package to compare different decks of cards in the board game Pegasus' Castle Sprint

## Creating a Deck.

Creating a Deck uses the `Chestersa\Yugioh\Deck` class,

### Initialising a Deck
```
$deck = new Deck('Name');
```
This will create a new deck with the name set to whatever you've passed into the constructor, names are used when outputting results between 2 decks.

```
$deck->getName();
```
Will then return the deck's name to use elsewhere


### Adding Cards

Then there are two ways to add a new card:
```
$deck->addCard($name, $atk, $type);
$deck->addCard('Dark Magician', 2500, Chestersa\Yugioh\Field::$DARK);
```
Where `$name` is the name of the card, `$atk` is the card's attack level, and `$type` is the card's field type, there are constants defined for this in the `Chestersa\Yugioh\Field` class which will be explained later, but you can use any values.

To bulk add cards you can use the addCards method:
```
$deck->addCards([
  ['name' => 'Dark Magician', 'atk' => 2500, 'type' => Chestersa\Yugioh\Field::$DARK]
]);
```
The keys for `name`, `atk`, and `type` are all required and should be the same as for the addCard method


### Dealing with Wins

Each deck will have a wins property set to 0 when it is initialised, which will be increased whenever it wins a head-to-head contest with another

```
$deck->addWin()
````
will increase the wins by one

```
$deck->getWins()
````
will return the current wins for the deck


## Creating a field.

The field in this game is created of tokens for different field locations, which can double a monster's attack if the field types match.

All field objects use the `Chestersa\Yugioh\Field` which has constants for the 5 field types used in the game

```
Field::$NIGHT
Field::$DAY
Field::$GRASS
Field::$FOREST
Field::$WATER
```

### Creating a field

```
$field = new Field();
```

### Adding to Fields

```
$field->addToField($type, $amount);
```
Where $type is the key of the field type and $amount is how many to add, defaults to 1

To make things easier there are 5 helpers functions, one for each default field type:
```
$field->addNight($amount)
$field->addDay($amount)
$field->addGrass($amount)
$field->addForest($amount)
$field->addWater($amount)
```

### Retrieving a Field

To retrieve the field setup use:
```
$field->getField();
```

## Comparing Decks

### Setup

To compare the decks, use the `Chestersa\Yugioh\YuGiOh` class


To initialise a simulation first of all you need to set the Field:
```
YuGiOh::setField($field)
```
where $field is a Field object


Then you can compare 2 deck using:
```
YuGiOh::compareDecks($deck1, $deck2)
```
Which returns a string with the outputs and if $deck1 wins more than it loses, its Wins property will be incremented by 1.


### Comparing multiple at a time
To compare multiple character decks use the helper:
```
YuGiOh::runSimulation([$deck1, $deck2, $deck3, $deck4]);
```
Which will run every deck in the array against all the others and return an array with all of the output strings.


### Comparing multiple to the opponents
To compare multiple character decks to the opponent deck at the same time use the helper:
```
YuGiOh::runVsOpponents([$deck1, $deck2, $deck3, $deck4], $opponents);
```
Which will run every deck in the array against the opponents and return an array of the output strings.


## The YuGiOhFactory

There is a `Chestersa\Yugioh\YuGiOhFactory` class with helpers to get all the decks and field setup as in the base board game:

```
YuGiOhFactory::getYugisDeck();
YuGiOhFactory::getKaibasDeck();
YuGiOhFactory::getJoeysDeck();
YuGiOhFactory::getMaisDeck();
YuGiOhFactory::getOpponentsDeck();
YuGiOhFactory::getDefaultField();
```
All return Deck or Field objects as appropriate
