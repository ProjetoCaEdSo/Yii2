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
    public $tipo_de_usuario;
    public $primeiro_nome;
    public $apelido;
    public $email;
    public $telemovel;
    public $distrito;
    public $morada;
    public $codigo_postal;
    public $n_identificacao_civil;
    public $data_nascimento;
    public $universidade;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['primeiro_nome', 'trim'],
            ['primeiro_nome', 'required'],
            ['primeiro_nome', 'string', 'min' => 2, 'max' => 20],

            ['apelido', 'trim'],
            ['apelido', 'required'],
            ['apelido', 'string', 'min' => 2, 'max' => 20],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This email address has already been taken.'],

            ['telemovel', 'trim'],
            ['telemovel', 'required'],
            ['telemovel', 'integer'],
            ['telemovel', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This email address has already been taken.'],
            /*
            ['distrito', 'required'],
            ['distrito', 'string', 'min' => 2, 'max' => 20],
            
            ['morada', 'required'],
            ['morada', 'string', 'min' => 2, 'max' => 50],
            
            ['codigo_postal', 'required'],
            ['codigo_postal', 'string', 'min' => 7, 'max' => 9],*/
            
            ['n_identificacao_civil', 'required'],
            ['n_identificacao_civil', 'string', 'min' => 2, 'max' => 20],
            ['email', 'unique', 'targetClass' => '\frontend\models\Utilizador', 'message' => 'This email address has already been taken.'],

            ['data_nascimento', 'required'],
            ['data_nascimento', 'string', 'min' => 2, 'max' => 20],
            
            ['universidade', 'required'],

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
        
        $user = new Utilizador();
        $user->nome = $this->nome;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param Utilizador $user user model to with email should be send
     * @return bool whether the email was sent
     */
    
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
