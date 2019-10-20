<?php
    // Static functions
    function triangulation(int $n): int {
        return (int) ($n * ($n + 1)/2); // casting from float to int
    }

    function convertToScientific(string $num): string {
        if (is_numeric($num)){
            // Checking whether the value of num is above 10E+15 or not
            if ($num > bcpow(10, 15)){
                $new = ""; // initial value
                for ($i = 0; $i < strlen($num); $i++){
                    if ($num[$i] != ".") {
                        $new .= $num[$i];
                    }
                    else{
                        break;
                    }
                }
                $power = strlen($new) - 1;
                return $num[0].".".substr($new, 1, 2)." * 10 ^ ".$power;
            }
            // Checking whether the value of num is below 10E-15 or not
            elseif ($num < bcpow(10, -15, strlen($num))){
                // Getting the value of power
                $power = 0; // initial value
                $dotIndex = 1;
                $firstNonZeroIndex = 0; // initial value
                for ($i = 0; $i < strlen($num); $i++){
                    if ($i > $dotIndex){
                        if ($num[$i] == 0){
                            $power--;
                        }
                        else{
                            $firstNonZeroIndex = $i;
                            break;
                        }
                    }
                }
                $power--;
                return $num[$firstNonZeroIndex].".".substr($num, $firstNonZeroIndex + 1, 2)
                    ." * 10 ^ ".$power;
            }
            return $num;
        }
        return "NaN";
    }

    class Action{
        /**
        This class contains attributes of awaken bonus gained for awakening a hero.
         */

        // Private attributes
        private $user;
        private $name;
        private $target;
        private $skillToUse;
        private const POSSIBLE_NAMES = ["NORMAL ATTACK", "NORMAL HEAL", "USE SKILL"];

        function __construct(Hero $user, string $name, Hero $target, Skill $skillToUse)
        {
        }

        /**
         * @return Hero $user
         */
        public function getUser(): Hero
        {
            return $this->user;
        }

        /**
         * @param Hero $user
         */
        public function setUser(Hero $user): void
        {
            $this->user = $user;
        }

        /**
         * @return string $name
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName(string $name): void
        {
            // Checking whether $name is in self::POSSIBLE_NAMES array or not
            if (in_array($name,self::POSSIBLE_NAMES)) {
                $this->name = $name;
            }
        }

        /**
         * @return Hero $target
         */
        public function getTarget(): Hero
        {
            return $this->target;
        }

        /**
         * @param Hero $target
         */
        public function setTarget(Hero $target): void
        {
            $this->target = $target;
        }

        /**
         * @return Skill $skillToUse
         */
        public function getSkillToUse(): Skill
        {
            return $this->skillToUse;
        }

        /**
         * @param Skill $skillToUse
         */
        public function setSkillToUse(Skill $skillToUse): void
        {
            $this->skillToUse = $skillToUse;
        }

        public function __clone()
        {
            return unserialize(serialize($this));
        }

        public function __toString()
        {
            $res = ""; // initial value
            $res .= "Details of the user of the action are as below.\n".$this->user."\n";
            $res .= "Name: ".$this->name."\n";
            $res .= "Details of the target of the action are as below.\n".$this->target."\n";
            $res .= "Details of the skill to be used are as below.\n".$this->skillToUse."\n";
            return $res;
        }
    }

    class AwakenBonus{
        /**
        This class contains attributes of awaken bonus gained for awakening a hero.
         */

        // Private attributes
        private $attackSpeedUp;
        private $critRateUp;
        private $critDamageUp;
        private $evasionChanceUp;
        
    }

    class SecondaryAwakenBonus extends AwakenBonus{

    }

    class Battle{

    }

    class Buff{

    }

    class Building{

    }

    class Debuff{

    }

    class DimensionHoleArea{

    }

    class Dungeon{

    }

    class Game{

    }

    class Hero{

    }

    class Boss extends Hero{

    }

    class Island{

    }

    class Item{

    }

    class Scroll extends Item{

    }

    class Shard extends Item{

    }

    class Level{

    }

    class MainStat{

    }

    class MapArea{

    }

    class Planet{

    }

    class Player{

    }

    class PlayerBase{

    }

    class PrefixStat{

    }

    class RaidArea{

    }

    class Reward{

    }

    class Rune{

    }

    class RuneStat{

    }

    class RuneUpgrade{

    }

    class EnchantedGem extends RuneUpgrade{

    }

    class Grindstone extends RuneUpgrade{

    }

    class ReappraisalStone extends RuneUpgrade{

    }

    class SetEffect{

    }

    class Shop{

    }

    class Skill{

    }

    class ActiveSkill extends Skill{

    }

    class LeaderSkill extends Skill{

    }

    class PassiveSkill extends Skill{

    }

    class SkillLevelUpBonus{

    }

    class SpecialEffect{

    }

    class Stage{

    }

    class Team{

    }

    function main(){
        $date = date('m/d/Y h:i:s a', time());
    }

    main();
?>