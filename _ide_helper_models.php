<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property-read \App\Models\User|null $desbloqueadopor
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null)
 */
	class IdeHelperAdmin {}
}

namespace App\Models{
/**
 * App\Models\Barris
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Barris newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Barris newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Barris query()
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Barris whereUserId($value)
 */
	class IdeHelperBarris {}
}

namespace App\Models{
/**
 * App\Models\Cabin
 *
 * @property int $id
 * @property string $nom
 * @property int|null $cabina_tipo_id
 * @property string|null $background
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereCabinaTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabin whereUpdatedAt($value)
 */
	class IdeHelperCabin {}
}

namespace App\Models{
/**
 * App\Models\Cabina
 *
 * @property int $id
 * @property string $nom
 * @property int|null $cabina_tipo_id
 * @property string|null $background
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CalendariReserves[] $reservas
 * @property-read int|null $reservas_count
 * @property-read \App\Models\Service|null $services
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereCabinaTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cabina whereUpdatedAt($value)
 */
	class IdeHelperCabina {}
}

namespace App\Models{
/**
 * App\Models\CabinasTipo
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cabina[] $cabinas
 * @property-read int|null $cabinas_count
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo query()
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CabinasTipo whereTitle($value)
 */
	class IdeHelperCabinasTipo {}
}

namespace App\Models{
/**
 * App\Models\Calendari
 *
 * @property int $id
 * @property string $title
 * @property string $estat
 * @property int $user_id
 * @property int $mes_id
 * @property int $ano
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereAno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereEstat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereMesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendari whereUserId($value)
 */
	class IdeHelperCalendari {}
}

namespace App\Models{
/**
 * App\Models\CalendariReserves
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $sort
 * @property string|null $color
 * @property string $estat
 * @property string|null $start
 * @property string|null $end
 * @property string $dia
 * @property int $user_id
 * @property int $cabina_id
 * @property int $franjahoraria_id
 * @property int|null $cabina_tipo_id
 * @property int|null $calendaris_id
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cabina|null $cabina
 * @property-read \App\Models\CabinasTipo|null $cabinatipo
 * @property-read \App\Models\FranjaHoraria|null $franja
 * @property-read \App\Models\User|null $usuario
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereCabinaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereCabinaTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereCalendarisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereDia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereEstat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereFranjahorariaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariReserves whereUserId($value)
 */
	class IdeHelperCalendariReserves {}
}

namespace App\Models{
/**
 * App\Models\CalendariVoluntariReservas
 *
 * @property int $id
 * @property string $estat
 * @property string $start
 * @property string $end
 * @property int|null $lunes
 * @property int|null $martes
 * @property int|null $miercoles
 * @property int|null $jueves
 * @property int|null $viernes
 * @property int|null $sabado
 * @property int|null $domingo
 * @property int $user_id
 * @property int|null $cabina_id
 * @property int $franjahoraria_id
 * @property int|null $calendaris_id
 * @property int|null $tipo_id
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cabina|null $cabina
 * @property-read \App\Models\FranjaHoraria|null $franja
 * @property-read \App\Models\calendari_reserves_tipo|null $tiporeserva
 * @property-read \App\Models\User|null $usuario
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereCabinaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereCalendarisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereDomingo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereEstat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereFranjahorariaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereJueves($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereLunes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereMartes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereMiercoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereSabado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendariVoluntariReservas whereViernes($value)
 */
	class IdeHelperCalendariVoluntariReservas {}
}

namespace App\Models{
/**
 * App\Models\Cancelacio
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cancelacio whereUserId($value)
 */
	class IdeHelperCancelacio {}
}

namespace App\Models{
/**
 * App\Models\Categoria
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereUserId($value)
 */
	class IdeHelperCategoria {}
}

namespace App\Models{
/**
 * App\Models\Comunidades
 *
 * @property int $id
 * @property string $nombre
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Recurso[] $recursos
 * @property-read int|null $recursos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidades newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidades newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidades query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidades whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidades whereNombre($value)
 */
	class IdeHelperComunidades {}
}

namespace App\Models{
/**
 * App\Models\Conegut
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property int $TE
 * @property int $TPS
 * @property int $SE
 * @property int $ET
 * @property int $XAT
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut query()
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereET($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereTE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereTPS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conegut whereXAT($value)
 */
	class IdeHelperConegut {}
}

namespace App\Models{
/**
 * App\Models\Documentacio
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $status
 * @property string|null $documento_path
 * @property int|null $TE
 * @property int|null $TPS
 * @property int|null $SE
 * @property int|null $ET
 * @property int|null $XAT
 * @property int|null $Orderlist
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereDocumentoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereET($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereOrderlist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereTE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereTPS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Documentacio whereXAT($value)
 */
	class IdeHelperDocumentacio {}
}

namespace App\Models{
/**
 * App\Models\Estatcivil
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estatcivil whereUserId($value)
 */
	class IdeHelperEstatcivil {}
}

namespace App\Models{
/**
 * App\Models\FranjaHoraria
 *
 * @property int $id
 * @property string $nom
 * @property string $hora_inici
 * @property string $hora_final
 * @property int $un_altre_dia
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria query()
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereHoraFinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereHoraInici($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereUnAltreDia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranjaHoraria whereUpdatedAt($value)
 */
	class IdeHelperFranjaHoraria {}
}

namespace App\Models{
/**
 * App\Models\Franjaedad
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int|null $XAT
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad query()
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franjaedad whereXAT($value)
 */
	class IdeHelperFranjaedad {}
}

namespace App\Models{
/**
 * App\Models\Genere
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Genere newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genere newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genere query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genere whereUserId($value)
 */
	class IdeHelperGenere {}
}

namespace App\Models{
/**
 * App\Models\Idioma
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma query()
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Idioma whereUserId($value)
 */
	class IdeHelperIdioma {}
}

namespace App\Models{
/**
 * App\Models\Mes
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Mes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mes whereUpdatedAt($value)
 */
	class IdeHelperMes {}
}

namespace App\Models{
/**
 * App\Models\Orientadors
 *
 * @property int $id
 * @property string|null $role
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $image
 * @property int $status
 * @property string|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $remember_token
 * @property string|null $NIC
 * @property string|null $direccion
 * @property string|null $numero
 * @property string|null $poblacion
 * @property string|null $provincia
 * @property string|null $CP
 * @property string|null $pais
 * @property string|null $DNI
 * @property string|null $datanaixement
 * @property string|null $telefonomovil
 * @property string|null $telefonofijo
 * @property string|null $desviodellamada
 * @property string|null $Notasdedesviodellamada
 * @property string|null $tipodevoluntarios
 * @property string|null $Clavesdelasede
 * @property string|null $Devoluciondelaclave
 * @property string|null $notas
 * @property string|null $baja
 * @property string|null $tipobaja
 * @property string|null $fechabaja
 * @property string|null $recibircomunicados
 * @property string|null $desbloqueado_por
 * @property int $TE
 * @property int $TPS
 * @property int $SE
 * @property int $ET
 * @property int $XAT
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereBaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereCP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereClavesdelasede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDNI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDatanaixement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDesbloqueadoPor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDesviodellamada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDevoluciondelaclave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereET($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereFechabaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereNIC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereNotas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereNotasdedesviodellamada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors wherePoblacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereRecibircomunicados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTPS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTelefonofijo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTelefonomovil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTipobaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereTipodevoluntarios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orientadors whereXAT($value)
 */
	class IdeHelperOrientadors {}
}

namespace App\Models{
/**
 * App\Models\Origenusuari
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari query()
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Origenusuari whereUserId($value)
 */
	class IdeHelperOrigenusuari {}
}

namespace App\Models{
/**
 * App\Models\Parellaestable
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parellaestable whereUserId($value)
 */
	class IdeHelperParellaestable {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class IdeHelperPermission {}
}

namespace App\Models{
/**
 * App\Models\Perquetruca
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca query()
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perquetruca whereUserId($value)
 */
	class IdeHelperPerquetruca {}
}

namespace App\Models{
/**
 * App\Models\Poblacio
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Recurso[] $recursos
 * @property-read int|null $recursos_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poblacio whereUserId($value)
 */
	class IdeHelperPoblacio {}
}

namespace App\Models{
/**
 * App\Models\Problema
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Problema newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Problema newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Problema query()
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problema whereUserId($value)
 */
	class IdeHelperProblema {}
}

namespace App\Models{
/**
 * App\Models\Provincia
 *
 * @property int $id
 * @property string|null $provincia
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Recurso[] $recursos
 * @property-read int|null $recursos_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia whereProvincia($value)
 */
	class IdeHelperProvincia {}
}

namespace App\Models{
/**
 * App\Models\Recurso
 *
 * @property int $id
 * @property int $user_id
 * @property int $categoria_id
 * @property int|null $tipusrecurs_id
 * @property int|null $problema_id
 * @property int|null $poblacio_id
 * @property int|null $provincia_id
 * @property int|null $barri_id
 * @property string|null $nom_entitat
 * @property string|null $nom_recurs_social
 * @property string|null $direccio
 * @property string|null $cp
 * @property string|null $telefon
 * @property string|null $fax
 * @property string|null $horari
 * @property string|null $email
 * @property string|null $web
 * @property string|null $persona_contacte
 * @property string|null $usuaris_servei
 * @property string|null $serveis_prestats
 * @property string|null $direccio_sp
 * @property string|null $telefon_sp
 * @property string|null $preu_sp
 * @property string|null $horari_sp
 * @property string|null $observacions
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Barris|null $barris
 * @property-read \App\Models\Categoria|null $categoria
 * @property-read \App\Models\Comunidades|null $comunidades
 * @property-read \App\Models\Poblacio|null $poblacio
 * @property-read \App\Models\Problema|null $problema
 * @property-read \App\Models\Provincia|null $provincias
 * @property-read \App\Models\Tipusrecurs|null $tipusrecurs
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereBarriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereCp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereDireccio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereDireccioSp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereHorari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereHorariSp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereNomEntitat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereNomRecursSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereObservacions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso wherePersonaContacte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso wherePoblacioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso wherePreuSp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereProblemaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereProvinciaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereServeisPrestats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereTelefon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereTelefonSp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereTipusrecursId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereUsuarisServei($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurso whereWeb($value)
 */
	class IdeHelperRecurso {}
}

namespace App\Models{
/**
 * App\Models\Relacio
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relacio whereUserId($value)
 */
	class IdeHelperRelacio {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $full-access
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereFullAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class IdeHelperRole {}
}

namespace App\Models{
/**
 * App\Models\Schedule
 *
 * @property int $id
 * @property int $user_id
 * @property int $service_id
 * @property int $cabin_id
 * @property int $time_slot_id
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Cabin|null $cabin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cabin[] $cabins
 * @property-read int|null $cabins_count
 * @property-read mixed $n_i_c
 * @property-read \App\Models\Service|null $services
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TimeSlot[] $timeSlots
 * @property-read int|null $time_slots_count
 * @property-read \App\Models\TimeSlot|null $timezone
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCabinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereTimeSlotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUserId($value)
 */
	class IdeHelperSchedule {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string $description
 * @property int $status
 * @property int $calendar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cabin[] $cabins
 * @property-read int|null $cabins_count
 * @property-read \App\Models\Schedule|null $schedule
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TimeSlot[] $timeSlots
 * @property-read int|null $time_slots_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCalendar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUserId($value)
 */
	class IdeHelperService {}
}

namespace App\Models{
/**
 * App\Models\ServiceCabin
 *
 * @property int $id
 * @property int $service_id
 * @property int $cabin_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin whereCabinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCabin whereUpdatedAt($value)
 */
	class IdeHelperServiceCabin {}
}

namespace App\Models{
/**
 * App\Models\ServiceTimeSlot
 *
 * @property int $id
 * @property int $service_id
 * @property int $time_slot_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot whereTimeSlotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTimeSlot whereUpdatedAt($value)
 */
	class IdeHelperServiceTimeSlot {}
}

namespace App\Models{
/**
 * App\Models\TimeSlot
 *
 * @property int $id
 * @property string $time_slot
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTimeSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereUpdatedAt($value)
 */
	class IdeHelperTimeSlot {}
}

namespace App\Models{
/**
 * App\Models\Tipusrecurs
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tipusrecurs whereUserId($value)
 */
	class IdeHelperTipusrecurs {}
}

namespace App\Models{
/**
 * App\Models\TrucadaSilenciosa
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrucadaSilenciosa whereUserId($value)
 */
	class IdeHelperTrucadaSilenciosa {}
}

namespace App\Models{
/**
 * App\Models\Trucades
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $status
 * @property string $trucada_tipo TE  : Telèfon de l’Esperança
 * TPS : Telèfon de Prevenció del Suïcidi
 * SE  : Servei emergències
 * ET  : Et Truquem
 * XAT : Servei jove
 * XATS: Servei jove psicòlegs
 * @property \Illuminate\Support\Carbon|null $data_hora_inici
 * @property \Illuminate\Support\Carbon|null $data_hora_final
 * @property int $cancelacio_id Vinculada con la tabla cancelacio. Motiu cancel·lació trucada
 * @property int $barri_id
 * @property int $poblacio_id
 * @property int $provincia_id
 * @property int|null $comunidad_id
 * @property int $origenusuari_id Vinculada con la tabla origenusuarios
 * @property int $idioma_id Vinculada con la tabla idiomas
 * @property int $estatcivil_id  	Vinculada con la tabla estatcivil
 * @property int $franjaedad_id  	Vinculada con la tabla franjaedad
 * @property int $relacio_id
 * @property int $genere_id
 * @property int $parellaestable_id
 * @property int $categoria_id
 * @property int $conegut_id
 * @property int|null $trucada_silenciosa_id
 * @property string|null $descripcio_problema
 * @property string|null $actuacio
 * @property string|null $tutoria
 * @property int $tel_934144848
 * @property int $tel_682900500
 * @property int $tel_682300003
 * @property int $tel_681101080
 * @property int $tel_nohose
 * @property string|null $user_habitual Ha trucat altres vegades durant el teu torn? Usuari habitual
 * @property string|null $user_habitual_tel Indicar número de telèfon, Usuari habitual
 * @property string|null $user_habitual_altres Usuari habitual, Reconeixes a l’usuari com habitual?
 * @property string|null $user_habitual_truca_vol
 * @property int|null $out_spain Trucada de fora d’Espanya
 * @property string|null $situacion_crisis L’usuari viu una situació de crisi / límit / desesperació?
 * @property string|null $situacion_duelo L’usuari està en un procés de dol per la mort d’un ésser estimat?
 * @property int $ei_tranquillitat Estado al inicio de la llamada. Tranquil•litat
 * @property int $ei_alegria Estado al inicio de la llamada. Alegria
 * @property int $ei_soledat Estado al inicio de la llamada. Sentiment de soledat
 * @property int $ei_ansietat Estado al inicio de la llamada. Ansietat / angoixa
 * @property int $ei_depressiu Estado al inicio de la llamada. Estat d’ànim depressiu
 * @property int $ei_agressivitat Estado al inicio de la llamada. Agressivitat
 * @property int $ei_frustracio Estado al inicio de la llamada. Frustració
 * @property int $ei_confusio Estado al inicio de la llamada. Confusió
 * @property int $ei_absent Estado al inicio de la llamada. Absent
 * @property int $ei_delirants Estado al inicio de la llamada. Idees delirants
 * @property int $ef_tranquillitat Estado al final de la llamada. Tranquil•litat
 * @property int $ef_alegria Estado al final de la llamada.Alegria
 * @property int $ef_soledat Estado al final de la llamada. Sentiment de soledat
 * @property int $ef_ansietat Estado al final de la llamada. Ansietat / angoixa
 * @property int $ef_depressiu Estado al final de la llamada.Estat d’ànim depressiu
 * @property int $ef_agressivitat Estado al final de la llamada. Agressivitat
 * @property int $ef_frustracio Estado al final de la llamada. Frustració
 * @property int $ef_confusio Estado al final de la llamada. Confusió
 * @property int $ef_absent Estado al final de la llamada. Absent
 * @property int $ef_delirants Estado al final de la llamada.Idees delirants
 * @property string|null $ei_descripcio Cal posar-hi una breu descripció que ajudi als escoltes a diferenciar-les
 * @property string|null $ef_descripcio Cal posar-hi una breu descripció que ajudi als escoltes a diferenciar-les
 * @property string|null $motiu_trucada MOTIU DE LA TRUCADA: Què expressa i/o diu la persona que truca?
 * @property string|null $problemes_familiars Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_economics Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_salut Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_violencia Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_soledat Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_insomni Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_lgtbi Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_pandemia Quina/es problemàtica/ques presenta l’usuari? Problemes relacionats amb la pandèmia
 * @property string|null $problemes_sexualitat Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_addiccions Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_substancia Quina/es problemàtica/ques presenta l’usuari? Durant la trucada es troba sota els efectes d’alguna substància?
 * @property string|null $problemes_suicidi Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_marginacio Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_habitatge Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $problemes_altres Quina/es problemàtica/ques presenta l’usuari?
 * @property string|null $salut_mental_diagnosticat SALUT MENTAL.Especificar que l’usuari ha expressat tenir un problema de salut mental diagnosticat
 * @property string|null $salut_mental_tractament SALUT MENTAL. En cas que la persona que truca tingui problemes de salut mental, indica quin/s Tractament farmacològic
 * @property string|null $salut_mental_problema SALUT MENTAL. Indica només si l’usuari manifesta que ha estat diagnosticat per algun problema de salut mental
 * @property string|null $salut_mental_trastorn SALUT MENTAL. Trastorn
 * @property string|null $info_user_laboral INFORMACIÓ DE L’USUARI: Situació Laboral
 * @property string|null $info_user_economica INFORMACIÓ DE L’USUARI: Situació econòmica
 * @property string|null $info_user_estudis INFORMACIÓ DE L’USUARI: Nivells estudis
 * @property string|null $info_user_trucada INFORMACIÓ DE L’USUARI: Completa la informació que puguis sobre la procedència de la trucada. (Si s'escau)
 * @property string|null $actuacio_actitud PARÀMETRES D’ACTUACIÓ:ACTITUD
 * @property string|null $actuacio_comunicacio PARÀMETRES D’ACTUACIÓ:COMUNICACIÓ
 * @property string|null $actuacio_emocions PARÀMETRES D’ACTUACIÓ:GESTIÓ EMOCIONS
 * @property string|null $actuacio_elaboracio PARÀMETRES D’ACTUACIÓ:ELABORACIÓ / FEEDBACK (Devolució)
 * @property string|null $actuacio_vinculacio PARÀMETRES D’ACTUACIÓ:VINCULACIÓ AMB ALTRES REURSOS
 * @property string|null $actuacio_descripcio PARÀMETRES D’ACTUACIÓ:Vols afegir algun comentari sobre la teva actuació? Pots fer-ho aquí (Pregunta oberta)
 * @property string|null $recursos_salud_mental RECURSOS I SERVEIS:
 * @property string|null $recursos_socials RECURSOS I SERVEIS:
 * @property string|null $recursos_associatiu RECURSOS I SERVEIS:
 * @property string|null $recursos_demana RECURSOS I SERVEIS: L’usuari demana algun recurs
 * @property string|null $recursos_facilites RECURSOS I SERVEIS:Facilites a l’usuari algun recurs?
 * @property string|null $recursos_demana_no RECURSOS I SERVEIS:L’usuari demana un recurs que no disposem
 * @property string|null $recursos_vinculat RECURSOS I SERVEIS:En cas que estigui vinculat amb alguna associació, entitat, etc., indicar quina/es
 * @property string|null $sui_curs_conducta
 * @property string|null $sui_curs_imminent
 * @property string|null $sui_curs_mes_personas
 * @property string|null $sui_curs_contacto061
 * @property string|null $sui_curs_contacto112
 * @property string|null $sui_risc_desitjat_mort
 * @property string|null $sui_risc_ferse_mal
 * @property string|null $sui_risc_pensat
 * @property string|null $sui_risc_plantejat
 * @property string|null $sui_risc_intenta
 * @property string|null $sui_risc_mes_intents
 * @property int $planificacio_sui_penjament
 * @property int $planificacio_sui_saltar
 * @property int $planificacio_sui_enverinament_farmacs
 * @property int $planificacio_sui_enverinament_substancies
 * @property int $planificacio_sui_armes
 * @property int $planificacio_sui_ofegament
 * @property int $planificacio_sui_llancar_se
 * @property int $planificacio_sui_tallant
 * @property int $planificacio_sui_otro
 * @property string|null $planificacio_sui_otro_text
 * @property string|null $planificacio_sui_lloc
 * @property int $planificacio_sui_disposa_farmacs
 * @property int $planificacio_sui_disposa_substancies
 * @property int $planificacio_sui_disposa_armes_foc
 * @property int $planificacio_sui_disposa_armes_blanques
 * @property int $planificacio_sui_disposa_alcades
 * @property int $planificacio_sui_disposa_vehicle
 * @property int $planificacio_sui_disposa_otro
 * @property string|null $planificacio_sui_disposa
 * @property int $pautes_ideacio_seriosament
 * @property int $pautes_ideacio_patiment
 * @property int $pautes_ideacio_vincle
 * @property int $pautes_ideacio_parli_obertament
 * @property int $pautes_ideacio_acompanyament
 * @property int $pautes_ideacio_intents_previs
 * @property int $pautes_ideacio_pla
 * @property int $pautes_ideacio_oriento
 * @property string|null $pautes_ideacio_rescats
 * @property int $pautes_crisis_mobilitzo_company
 * @property int $pautes_crisis_demano_nom
 * @property int $pautes_crisis_entorn360
 * @property int $pautes_crisis_ambivalencia
 * @property int $pautes_crisis_allunyi
 * @property int $pautes_crisis_ajornar_acte
 * @property int $pautes_crisis_consentiment061
 * @property int $pautes_crisis_dades061
 * @property int $pautes_crisis_comuniqui
 * @property int $pautes_crisis_intervencio_tercers
 * @property int $pautes_crisis_mantinc_comunicacio
 * @property int $pautes_crisis_mantinc_acompanyament
 * @property int $situacions_desconfinament
 * @property int $situacions_rebrot
 * @property int $situacions_coronavirus
 * @property int $situacions_salut_mental
 * @property int $situacions_salut_general
 * @property int $situacions_problemes_personals
 * @property int $situacions_problemes_relacionals
 * @property int $situacions_problemes_familiars
 * @property int $situacions_problemes_economics
 * @property int $situacions_problemes_laborals
 * @property int $situacions_violencia_genere
 * @property int $situacions_orientacio_sexual
 * @property int $situacions_lgtbi
 * @property int $situacions_ideacio_suicida
 * @property int $situacions_suicidi_curs
 * @property int $situacions_soledat
 * @property int $situacions_angoixa
 * @property int $situacions_por
 * @property int $situacions_interes_voluntaria
 * @property int $situacions_insomni
 * @property int $situacions_sexualitat
 * @property int $situacions_otro
 * @property string|null $situacions_otro_texts
 * @property string|null $problematica_principal
 * @property string|null $problematica_principal_altres
 * @property string|null $problematica_segona
 * @property string|null $problematica_tercera
 * @property string|null $estat_psicologic
 * @property int $vinculacio_salut
 * @property int $vinculacio_socials
 * @property int $vinculacio_teixit
 * @property int $recurs
 * @property string|null $recurs_quin
 * @property int $recurs_cuidadora
 * @property int $recurs_telematic
 * @property int $recurs_psicologica
 * @property string|null $recurs_telematic_nom
 * @property string|null $recurs_telematic_telefon
 * @property string|null $recurs_telematic_email
 * @property string|null $resultat
 * @property string|null $resultat_altres
 * @property string|null $et_es_una_trucada
 * @property string|null $telefon
 * @property int|null $et_usuari_te
 * @property int|null $xat_blanc
 * @property string|null $carrera_suicida
 * @property int|null $xat_morir_se
 * @property int|null $xat_fer_se_mal
 * @property int|null $xat_plantejat_suicidar_se
 * @property int|null $xat_intentat_suicidar
 * @property int|null $xat_vida_intentat_suicidar
 * @property int|null $xat_esta_diagnosticat
 * @property string|null $xat_esta_diagnosticat_quin
 * @property int|null $xat_pren_medicacio
 * @property string|null $xat_pren_medicacio_quina
 * @property int|null $serveis_emergencies_061
 * @property int|null $serveis_emergencies_112
 * @property int|null $serveis_emergencies_116111
 * @property string|null $nombre_episodis
 * @property int|null $suport_1
 * @property int|null $suport_2
 * @property int|null $suport_3
 * @property string|null $activat_servei_traduccio
 * @property int|null $orientador_id
 * @property string|null $telefon_cures
 * @property string|null $cuidador
 * @property string|null $cuidador_targeta
 * @property string|null $cuidador_familiar
 * @property string|null $cuidador_familiar_quin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Orientadors|null $Orientadors
 * @property-read \App\Models\TrucadaSilenciosa|null $TrucadaSilenciosa
 * @property-read \App\Models\Barris|null $barris
 * @property-read \App\Models\Cancelacio|null $cancelacio
 * @property-read \App\Models\Categoria|null $categoria
 * @property-read \App\Models\Comunidades|null $comunidades
 * @property-read \App\Models\Conegut|null $conegut
 * @property-read \App\Models\Estatcivil|null $estatcivil
 * @property-read \App\Models\Franjaedad|null $franjaedad
 * @property-read \App\Models\Genere|null $genere
 * @property-read \App\Models\Idioma|null $idioma
 * @property-read \App\Models\Origenusuari|null $origenusuari
 * @property-read \App\Models\Parellaestable|null $parellaestable
 * @property-read \App\Models\Perquetruca|null $perquetruca
 * @property-read \App\Models\Poblacio|null $poblacio
 * @property-read \App\Models\Problema|null $problema
 * @property-read \App\Models\Provincia|null $provincias
 * @property-read \App\Models\User|null $user
 * @method static \App\Builders\TrucadesBuilder|Trucades filterFrom(string $field, ?string $dateFrom)
 * @method static \App\Builders\TrucadesBuilder|Trucades filterTo(string $field, ?string $dateTo)
 * @method static \App\Builders\TrucadesBuilder|Trucades newModelQuery()
 * @method static \App\Builders\TrucadesBuilder|Trucades newQuery()
 * @method static \App\Builders\TrucadesBuilder|Trucades query()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActivatServeiTraduccio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioActitud($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioComunicacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioDescripcio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioElaboracio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioEmocions($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereActuacioVinculacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereAuth()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereBarriId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCancelacioId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCarreraSuicida($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCategoriaId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereComunidadId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereConegutId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCreatedAt($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCuidador($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCuidadorFamiliar($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCuidadorFamiliarQuin($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereCuidadorTargeta($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereDataHoraFinal($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereDataHoraInici($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereDescripcioProblema($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereET()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfAbsent($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfAgressivitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfAlegria($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfAnsietat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfConfusio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfDelirants($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfDepressiu($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfDescripcio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfFrustracio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfSoledat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEfTranquillitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiAbsent($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiAgressivitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiAlegria($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiAnsietat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiConfusio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiDelirants($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiDepressiu($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiDescripcio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiFrustracio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiSoledat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEiTranquillitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEstatPsicologic($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEstatcivilId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEtEsUnaTrucada($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereEtUsuariTe($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereFranjaedadId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereGenereId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereIdiomaId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereIf(string $field, ?string $value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereInfoUserEconomica($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereInfoUserEstudis($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereInfoUserLaboral($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereInfoUserTrucada($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereMotiuTrucada($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereNombreEpisodis($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereOrientadorId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereOrigenusuariId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereOutSpain($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereParellaestableId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisAjornarActe($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisAllunyi($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisAmbivalencia($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisComuniqui($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisConsentiment061($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisDades061($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisDemanoNom($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisEntorn360($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisIntervencioTercers($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisMantincAcompanyament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisMantincComunicacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesCrisisMobilitzoCompany($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioAcompanyament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioIntentsPrevis($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioOriento($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioParliObertament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioPatiment($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioPla($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioRescats($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioSeriosament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePautesIdeacioVincle($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiArmes($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposa($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaAlcades($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaArmesBlanques($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaArmesFoc($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaFarmacs($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaOtro($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaSubstancies($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiDisposaVehicle($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiEnverinamentFarmacs($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiEnverinamentSubstancies($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiLlancarSe($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiLloc($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiOfegament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiOtro($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiOtroText($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiPenjament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiSaltar($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePlanificacioSuiTallant($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades wherePoblacioId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblematicaPrincipal($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblematicaPrincipalAltres($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblematicaSegona($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblematicaTercera($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesAddiccions($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesAltres($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesEconomics($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesFamiliars($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesHabitatge($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesInsomni($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesLgtbi($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesMarginacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesPandemia($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesSalut($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesSexualitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesSoledat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesSubstancia($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesSuicidi($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProblemesViolencia($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereProvinciaId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecurs($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursCuidadora($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursPsicologica($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursQuin($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursTelematic($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursTelematicEmail($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursTelematicNom($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursTelematicTelefon($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosAssociatiu($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosDemana($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosDemanaNo($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosFacilites($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosSaludMental($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosSocials($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRecursosVinculat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereRelacioId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereResultat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereResultatAltres($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSalutMentalDiagnosticat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSalutMentalProblema($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSalutMentalTractament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSalutMentalTrastorn($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereServeisEmergencies061($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereServeisEmergencies112($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereServeisEmergencies116111($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionCrisis($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionDuelo($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsAngoixa($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsCoronavirus($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsDesconfinament($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsIdeacioSuicida($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsInsomni($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsInteresVoluntaria($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsLgtbi($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsOrientacioSexual($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsOtro($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsOtroTexts($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsPor($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsProblemesEconomics($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsProblemesFamiliars($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsProblemesLaborals($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsProblemesPersonals($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsProblemesRelacionals($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsRebrot($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsSalutGeneral($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsSalutMental($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsSexualitat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsSoledat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsSuicidiCurs($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSituacionsViolenciaGenere($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereStatus($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiCursConducta($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiCursContacto061($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiCursContacto112($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiCursImminent($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiCursMesPersonas($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscDesitjatMort($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscFerseMal($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscIntenta($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscMesIntents($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscPensat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuiRiscPlantejat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuport1($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuport2($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereSuport3($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTE()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTel681101080($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTel682300003($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTel682900500($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTel934144848($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTelNohose($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTelefon($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTelefonCures($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTrucadaSilenciosaId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTrucadaTipo($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereTutoria($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUpdatedAt($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUserHabitual($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUserHabitualAltres($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUserHabitualTel($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUserHabitualTrucaVol($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereUserId($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereVinculacioSalut($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereVinculacioSocials($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereVinculacioTeixit($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXAT()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXATS()
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatBlanc($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatEstaDiagnosticat($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatEstaDiagnosticatQuin($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatFerSeMal($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatIntentatSuicidar($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatMorirSe($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatPlantejatSuicidarSe($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatPrenMedicacio($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatPrenMedicacioQuina($value)
 * @method static \App\Builders\TrucadesBuilder|Trucades whereXatVidaIntentatSuicidar($value)
 */
	class IdeHelperTrucades {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $role
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $image
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $remember_token
 * @property string|null $NIC
 * @property string|null $direccion
 * @property string|null $numero
 * @property string|null $poblacion
 * @property string|null $provincia
 * @property string|null $CP
 * @property string|null $pais
 * @property string|null $DNI
 * @property string|null $datanaixement
 * @property string|null $telefonomovil
 * @property string|null $telefonofijo
 * @property string|null $desviodellamada
 * @property string|null $Notasdedesviodellamada
 * @property string|null $tipodevoluntarios
 * @property string|null $Clavesdelasede
 * @property string|null $Devoluciondelaclave
 * @property string|null $notas
 * @property string|null $baja
 * @property string|null $tipobaja
 * @property string|null $fechabaja
 * @property string|null $recibircomunicados
 * @property string|null $desbloqueado_por
 * @property int $TE
 * @property int $TPS
 * @property int $SE
 * @property int $ET
 * @property int $XAT
 * @property-read User|null $desbloqueadopor
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jhonatanfdez\JhonatanPermisos\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Trucades[] $trucadas
 * @property-read int|null $trucadas_count
 * @property-read \App\Models\Trucades|null $trucade
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereClavesdelasede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDNI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDatanaixement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDesbloqueadoPor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDesviodellamada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDevoluciondelaclave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereET($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFechabaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNIC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNotas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNotasdedesviodellamada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePoblacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRecibircomunicados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTPS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelefonofijo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelefonomovil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTipobaja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTipodevoluntarios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereXAT($value)
 */
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * App\Models\Zonatrucada
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zonatrucada whereUserId($value)
 */
	class IdeHelperZonatrucada {}
}

namespace App\Models{
/**
 * App\Models\calendari_reserves_tipo
 *
 * @property int $id
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|calendari_reserves_tipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|calendari_reserves_tipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|calendari_reserves_tipo query()
 * @method static \Illuminate\Database\Eloquent\Builder|calendari_reserves_tipo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|calendari_reserves_tipo whereTitle($value)
 */
	class IdeHelpercalendari_reserves_tipo {}
}

