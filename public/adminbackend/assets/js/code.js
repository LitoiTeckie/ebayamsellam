$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Continuer",
            text: "Avec la suppression des données?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Supprimer!",
            cancelButtonText: "Annuler",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(
                    "Suppression!",
                    "Les données ont été supprimées.",
                    "success"
                );
            }
        });
    });
});

/// Confirm Order
$(function () {
    $(document).on("click", "#confirm", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Confirmer?",
            text: "Une fois confirmée, Vous ne pourrez plus la mettre en attente?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Confirmer!",
            cancelButtonText: "Annuler",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Confirmation!", " Changement de statut", "success");
            }
        });
    });
});
/// End Confirm Order

/// Processing Order
$(function () {
    $(document).on("click", "#processing", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Engager le Processus?",
            text: "Une fois engagée, Vous ne pourrez plus revenir en arrière?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Engager!",
            cancelButtonText: "Annuler",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Process!", "Processus Engagé", "success");
            }
        });
    });
});
/// Eend Processing Order

/// Delivered Order
$(function () {
    $(document).on("click", "#delivered", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Envoi?",
            text: "Une fois livrée, Vous ne pourrez plus réengager le Process?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Envoyer!",
            cancelButtonText: "Annuler",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Livraison!", "Article livré", "success");
            }
        });
    });
});
/// End Delivered Order

/// Return Approved Order
$(function () {
    $(document).on("click", "#approved", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Approuver le Renvoi?",
            text: "une fois approuvé, Vous ne pourrez plus le changer",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Approuver!",
            cancelButtonText: "Annuler",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Approuvé!", "Renvoi approuvé", "success");
            }
        });
    });
});
/// End Return Order Approved
