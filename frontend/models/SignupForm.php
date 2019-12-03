<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Utilizador;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $Tipo;
    public $Nome;
    public $Apelido;
    public $Email;
    public $Telemovel;
    public $Distrito;
    public $Morada;
    public $CodigoPostal;
    public $NumCarCid;
    public $DataNasc;
    public $Universidade;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['Nome', 'trim'],
            ['Nome', 'required'],
            ['Nome', 'string', 'min' => 2, 'max' => 20],

            ['Apelido', 'trim'],
            ['Apelido', 'required'],
            ['Apelido', 'string', 'min' => 2, 'max' => 20],

            ['Email', 'trim'],
            ['Email', 'required'],
            ['Email', 'email'],
            ['Email', 'string', 'max' => 255],
            ['Email', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This email address has already been taken.'],

            ['Telemovel', 'trim'],
            ['Telemovel', 'required'],
            ['Telemovel', 'integer'],
            ['Telemovel', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This phone contact has already been taken.'],
            
            /*['Distrito', 'required'],*/
            ['Distrito', 'string', /*'min' => 2,*/ 'max' => 20],

            /*['Morada', 'required'],*/
            ['Morada', 'string', /*'min' => 2,*/ 'max' => 50],
            
            /*['CodigoPostal', 'required'],*/
            ['CodigoPostal', 'string', /*'min' => 7,*/ 'max' => 9],
            
            ['NumCarCid', 'required'],
            ['NumCarCid', 'string', 'min' => 2, 'max' => 20],
            ['NumCarCid', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This identification has already been taken.'],

            ['DataNasc', 'required'],
            ['DataNasc', 'string', 'min' => 2, 'max' => 20],

            /*['Distrito', 'required'],*/
            ['Universidade', 'string', /*'min' => 2,*/ 'max' => 20],
            
            ['password', 'required'],
            ['password', 'string', 'min' => 6],

        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $utilizador = new Utilizador();
        /*if($this->Tipo == "b"){*/
            $utilizador->Tipo = "Estudante";
        /*}else{
            if($this->Tipo == "c"){
                $utilizador->Tipo = "Ambos";
            }else{
                if($this->Tipo == "d"){
                    $utilizador->Tipo = "Senhorio";
                }else{
                    return null;
                }
            }
        }*/
        $utilizador->Nome = $this->Nome;
        $utilizador->Apelido = $this->Apelido;
        $utilizador->Email = $this->Email;
        $utilizador->Telemovel = $this->Telemovel;
        $utilizador->Distrito = $this->Distrito;
        $utilizador->Morada = $this->Morada;
        $utilizador->CodigoPostal = $this->CodigoPostal;
        $utilizador->NumCarCid = $this->NumCarCid;
        $utilizador->DataNasc = date("y-m-d", strtotime($this->DataNasc));;
        $utilizador->Universidade = $this->Universidade;
        $utilizador->setPassword($this->password);
        $utilizador->generateAuthKey();
        $utilizador->generateEmailVerificationToken();
        return $utilizador->save();// && $this->sendEmail($utilizador);
    }

    /**
     * Sends confirmation email to user
     * @param Utilizador $utilizador user model to with email should be send
     * @return bool whether the email was sent
     */
    
    protected function sendEmail($utilizador)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['utilizador' => $utilizador]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->Email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
