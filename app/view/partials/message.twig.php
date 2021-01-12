{% extends 'partials/body.twig.php'  %}

{% block title %}{{titulo}} - Mini Framework{% endblock %}

{% block body %}
<div class="max-width center-screen bg-white padding mt-5">
    
    <h1>{{titulo}}</h1>

    <hr>

    <p>{{descricao}}</p>

    {% if link != null %}
    <a href="{{link}}" class="btn btn-info">Voltar</a>
    {% endif %}

</div>
{% endblock %}