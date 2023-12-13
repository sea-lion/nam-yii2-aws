<?php

namespace frontend\controllers;

use frontend\models\Country;
use frontend\models\CountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Country models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $totalNamMembers = 200;
        $totalNamObservers = 20;

        $totalIaeaMembers = 0;
        $totalIaeaNonMembers = 0;

        $totalNptMembers = 0;
        $totalNptNonMembers = 0;

        $totalBwcMembers = 0;
        $totalBwcSignatories = 0;
        $totalBwcNonMembers = 0;

        $totalCwcMembers = 0;
        $totalCwcSignatories = 0;
        $totalCwcNonMembers = 0;

        $totalCtbtMembers = 0;
        $totalCtbtSignatories = 0;
        $totalCtbtNonMembers = 0;

        $totalG77Members = 0;
        $totalG77NonMembers = 0;
        $searchModel = new CountrySearch();
        //$dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider = $searchModel->search(null);
        $dataProvider->pagination = false;
        foreach($dataProvider->models as $model) {
			$iaea = $model->iaea;
			$npt = $model->npt;
			$bwc = $model->bwc;
			$cwc = $model->cwc;
			$ctbt = $model->ctbt;
			$g77 = $model->g77;
			if($model->active > 0) {
				$totalNamMembers++;
			}
			else $totalNamObservers++;
			switch($iaea) {
				case 'N':
					$totalIaeaNonMembers++;
					break;
				default:
					$totalIaeaMembers++;
					break;
			}
			switch($npt) {
				case 'N':
					$totalNptNonMembers++;
					break;
				default:
					$totalNptMembers++;
					break;
			}
			switch($bwc) {
				case 'N':
					$totalBwcNonMembers++;
					break;
				case 'S':
					$totalBwcSignatories++;
					break;
				default:
					$totalBwcMembers++;
					break;
			}
			switch($cwc) {
				case 'N':
					$totalCwcNonMembers++;
					break;
				case 'S':
					$totalCwcSignatories++;
					break;
				default:
					$totalCwcMembers++;
					break;
			}
			switch($ctbt) {
				case 'N':
					$totalCtbtNonMembers++;
					break;
				case 'S':
					$totalCtbtSignatories++;
					break;
				default:
					$totalCtbtMembers++;
					break;
			}
			switch($g77) {
				case 'N':
					$totalG77NonMembers++;
					break;
				default:
					$totalG77Members++;
					break;
			}

		}


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'totalNamMembers'=>$totalNamMembers,
            'totalNamObservers'=>$totalNamObservers,
            'totalIaeaMembers'=>$totalIaeaMembers,
            'totalIaeaNonMembers'=>$totalIaeaNonMembers,
            'totalNptMembers' => $totalNptMembers,
            'totalNptNonMembers' => $totalNptNonMembers,
            'totalBwcMembers' => $totalBwcMembers,
            'totalBwcSignatories'=>$totalBwcSignatories,
            'totalBwcNonMembers' => $totalBwcNonMembers,
            'totalCwcMembers'=>$totalCwcMembers,
            'totalCwcSignatories'=>$totalCwcSignatories,
            'totalCwcNonMembers'=>$totalCwcNonMembers,
            'totalCtbtMembers'=>$totalCtbtMembers,
            'totalCtbtSignatories'=>$totalCtbtSignatories,
            'totalCtbtNonMembers'=>$totalCtbtNonMembers,
            'totalG77Members'=>$totalG77Members,
            'totalG77NonMembers'=>$totalG77NonMembers,
        ]);
    }

    /**
     * Displays a single Country model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Country model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Country();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Country model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Country model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Country model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Country the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Country::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMapData() {
		$countries = [];
		//$countries[] = array('Country','CountryName','CountryID');

		$models = Country::find()->orderBy('name ASC')->all();

		foreach($models as $model) {
				$country = "";
				$tooltip = "";
				//echo "---" . $model->name . ": " . preg_match("/^Cote.+/", $model->name) ;
				//echo "<br>";
				switch($model->name){
						case "Congo":
					 		$country = "CG";
					 		$tooltip = "Congo: NAM Member since " . $model->nam;
					 		break;
						case "Eswatini":
							$country = "SZ";
							$tooltip = "Eswatini NAM Member since " . $model->nam;
						break;
						default:
							if (preg_match("/Ivoire/", $model->name) ) {
								$country = "Ivory Coast";
								$tooltip = $model->name . ": NAM Member since " . $model->nam;
							}
							elseif (preg_match("/of the Congo/", $model->name) ) {
								$country = "CD";
								$tooltip = $model->name . ": NAM Member since " . $model->nam;

							}
							elseif (preg_match("/of Korea/", $model->name)) {
								$country = "North Korea";
								$tooltip = $model->name . ": NAM Member since " . $model->nam;
							}
							else {
								$country = $model->name;
								$tooltip = $model->active ? "NAM Member since " . $model->nam : "NAM Observer";
							}
				}
				$cid = $model->active ? $model->id *1000 : NULL;
				$countries[] = [$country,$cid,$tooltip];
		}
        $this->layout = 'bare';
        return $this->render('mapdata', [
            'countries' => $countries,
        ]);
    }
}
