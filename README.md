<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## About API TEST SALESFARM

API para gerenciamento de pacientes


## Startando o projeto

Agora você vai ir pra o diretório raiz do projeto e executar os seguintes comandos:

    composer install

Copiar o .env.example para .env

    cp .env.example .env

Agora vai precisar rodar algumas com o Artisan:

    php artisan key:generate


    php artisan migrate --seed

Agora você vai deixar sua aplicação online:

    php artisan serve

## API endpoints:

As consultas para api são feitas pelo endereço:

    localhost:8000/api/

-------------------------------------------
## /Paciente:
Criar novo paciente:
    POST - http://127.0.0.1:8000/api/paciente

Body object:

    {
            "nome": "Vanessa Lima GOODWIN II",
            "telefone_celular": "999999999",
            "cpf_rg": 1356466511,
            "estado_civil": "Solteiro(a)",
            "estado_naturalidade": "GO",
            "cidade_naturalidade": "Goiania",
            "data_nascimento": "1991-08-19",
            "observacao": "Tempora omnis ducimus beatae nihil nesciunt possimus error ullam aliquam sed placeat alias blanditiis exercitationem sit.",
            "sexo": "Feminino",
            "tipo": "Dependente",
            "cep": 65044000,
            "estado": "MA",
            "cidade": "Eddieshire",
            "bairro": "Schuster Manors",
            "logradouro": "Cartwright Tunnel",
            "numero": "00",
            "matricula": null,
            "ativo": 1,
            "deleted_at": null,
            "created_at": "2021-01-27T12:05:08.000000Z",
            "updated_at": "2021-01-27T21:23:40.000000Z"
    }

-------------------------------------------
Atualizar paciente existente:
    put - http://127.0.0.1:8000/api/paciente/{id} 
    
    ex: put - http://127.0.0.1:8000/api/paciente/1

Body object:

    {       
            "id": 1,
            "nome": "Vanessa Lima GOODWIN II",
            "telefone_celular": "999999999",
            "cpf_rg": 1356466511,
            "estado_civil": "Solteiro(a)",
            "estado_naturalidade": "GO",
            "cidade_naturalidade": "Goiania",
            "data_nascimento": "1991-08-19",
            "observacao": "Tempora omnis ducimus beatae nihil nesciunt possimus error ullam aliquam sed placeat alias blanditiis exercitationem sit.",
            "sexo": "Feminino",
            "tipo": "Dependente",
            "cep": 65044000,
            "estado": "MA",
            "cidade": "Eddieshire",
            "bairro": "Schuster Manors",
            "logradouro": "Cartwright Tunnel",
            "numero": "00",
            "matricula": null,
            "ativo": 1,
            "deleted_at": null,
            "created_at": "2021-01-27T12:05:08.000000Z",
            "updated_at": "2021-01-27T21:23:40.000000Z"
    }

-------------------------------------------

Carregar lista de pacientes:
GET - http://127.0.0.1:8000/api/paciente

-------------------------------------------

Deletar paciente:
DELETE - http://127.0.0.1:8000/api/paciente/{id}

    ex: DELETE - http://127.0.0.1:8000/api/paciente/1

-------------------------------------------

## /Exame:
Criar novo exame:
    POST - http://127.0.0.1:8000/api/exame

Body object:

    {
        "paciente_id": 1,
        "data": "2020-01-18",
        "pressao": "19/8",
        "altura": 195,
        "peso": 77,
        "glicemia": 100,
        "temperatura": 37.93,
        "frequencia_cardiaca": 82,
        "frequencia_respiratoria": 138,
        "enfermeiro": "Lorena Tavares",
        "ativo": 1,
        "deleted_at": null,
        "created_at": "2021-01-27T12:05:08.000000Z",
        "updated_at": "2021-01-27T12:05:08.000000Z"
    }

-------------------------------------------
Atualizar exame existente:
    put - http://127.0.0.1:8000/api/exame/{id} 
    
    ex: put - http://127.0.0.1:8000/api/exame/1

Body object:

    {       
        "id": 1,
        "paciente_id": 1,
        "data": "2020-01-18",
        "pressao": "19/8",
        "altura": 195,
        "peso": 77,
        "glicemia": 100,
        "temperatura": 37.93,
        "frequencia_cardiaca": 82,
        "frequencia_respiratoria": 138,
        "enfermeiro": "Lorena Tavares",
        "ativo": 1,
        "deleted_at": null,
        "created_at": "2021-01-27T12:05:08.000000Z",
        "updated_at": "2021-01-27T12:05:08.000000Z"
    }

-------------------------------------------

Carregar lista de exames:
GET - http://127.0.0.1:8000/api/exame

-------------------------------------------

Deletar exame:
DELETE - http://127.0.0.1:8000/api/exame/{id}

    ex: DELETE - http://127.0.0.1:8000/api/exame/1

-------------------------------------------

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
