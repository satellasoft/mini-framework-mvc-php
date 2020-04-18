{% extends 'partials/body.twig.php'  %}

{% block title %}Página não encontrada - Mini Framework{% endblock %}

{% block body %}
<div class="max-width center-screen bg-white padding">
    <div class="card border-danger mb-3">
        <div class="card-header">{{title}}</div>
        <div class="card-body">
            <p class="card-text">{{message}}</p>
        </div>
    </div>
</div>
{% endblock %}