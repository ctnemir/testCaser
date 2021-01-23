// Silme İşlemi
$(".fa-trash-o").click(function () {
destroy_id = $(this).attr('id');
alertify.confirm('Silme İşlemini Onaylayın', 'Bu işlem geri alınamaz',
function () {
$.ajax({
type: "DELETE",
url: "mulksahibi/" + destroy_id,
success: function (msg) {
if (msg) {
$("#item-" + destroy_id).remove();
alertify.success("İşlem Tamamlandı.");
} else {
alertify.error("İşlem Tamamlanamadı.");
}
}
});
},
function () {
alertify.error('Silme işlemi iptal edildi');
}
)
});
