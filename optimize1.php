<?php

Class PersonEntity {
    public function __construct(array $human)
    {
        $this->isHumanOk($human);
    }

    private function isHumanOk(array $human) {
        $errors = [];
        foreach (["name", "surname", "age", "gender", "status"] as $human_required_property) {
            if (!isset($human[$human_required_property])) {
                $errors[] = $human_required_property;
            }
        }
        if (count($errors) > 0) {
            throw new PersonEntityException(sprintf("FemailEntity required fileds are missing: %s", implode(", ", $errors)));
        }
        
    }
}

new PersonEntity(["gender"]);
