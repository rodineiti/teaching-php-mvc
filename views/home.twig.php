{% extends 'layouts/_base.twig.php' %}

{% block content %}
<div class="container my-5">
    <div class="p-5 bg-body-tertiary rounded-3">
        <div class="row">
            {% for i in 0..2 %}
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
