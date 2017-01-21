<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AddressBook;

/**
 * AddressBookSearch represents the model behind the search form about `app\models\AddressBook`.
 */
class AddressBookSearch extends AddressBook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'surname', 'company', 'position', 'email_personal', 'email_work', 'phone_personal', 'phone_work'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AddressBook::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        	'sort'=> [
        	    'defaultOrder' => ['id' => SORT_DESC]
        	],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'email_personal', $this->email_personal])
            ->andFilterWhere(['like', 'email_work', $this->email_work])
            ->andFilterWhere(['like', 'phone_personal', $this->phone_personal])
            ->andFilterWhere(['like', 'phone_work', $this->phone_work]);

        return $dataProvider;
    }
}
